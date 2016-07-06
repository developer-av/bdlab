<?php

namespace common\modules\clients\backend\widgets\dynafields;

use bupy7\dynafields\DynaFields as baseDynaFields;

use yii\helpers\Html;
use yii\base\InvalidConfigException;
use yii\widgets\Pjax;
use yii\helpers\Json;
use yii\web\View;

/**
 * Widget for display dynamic fields, adding and removing their use Pjax.
 *
 * Home page: https://github.com/bupy7/yii2-dynamic-fields
 *
 * @author Vasilij Belosludcev http://mihaly4.ru
 * @since 1.0.0
 */
class DynaFields extends baseDynaFields {

    public $pjax = true;

    /**
     * @inheritdoc
     */
    public function init() {
        if (!$this->hasModel()) {
            throw new InvalidConfigException("Either 'models' and 'attribute' properties must be specified.");
        }
        if (empty($this->urlAdd) || empty($this->urlRemove)) {
            throw new InvalidConfigException("Either 'urlAdd' and 'urlRemove' properties must be specified.");
        }
        if ($this->pjax === true) {
            Pjax::begin($this->pjaxOptions);
        }
    }

    public function run() {
        $form = clone $this->form;
        if (empty($form->fieldConfig['template'])) {
            $form->fieldConfig['template'] = "{label}\n{input}\n{hint}\n{error}";
        }
        if (empty($form->fieldConfig['labelOptions'])) {
            $form->fieldConfig['labelOptions'] = ['class' => 'control-label'];
        }
        $keys = array_keys($this->models);
        $form->fieldConfig['template'] = str_replace('{input}', $this->inputTemplate, $form->fieldConfig['template']);
        $button = Html::a(
                        Html::tag('span', '', [
                            'class' => 'glyphicon glyphicon-plus',
                        ]), $this->urlAdd, $this->buttonOptions
        );
        echo $this->field($form, $this->models[$keys[0]], "[{$keys[0]}]{$this->attribute}", $button);
        if (!$this->labelEach) {
            $form->fieldConfig['template'] = str_replace(
                    '{label}', Html::tag('label', '', $form->fieldConfig['labelOptions']), $form->fieldConfig['template']
            );
        }
        if (!$this->hintEach) {
            $form->fieldConfig['template'] = preg_replace(
                    '/\{hint\}|\{hint\}\\n|\{hint\}\s/i', '', $form->fieldConfig['template']
            );
        }
        for ($i = 1; $i != count($keys); $i++) {
            $button = Html::a(
                            Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-minus',
                            ]), array_merge((array) $this->urlRemove, [
                        'id' => $this->models[$i]->{$this->primaryKey},
                            ]), $this->buttonOptions
            );
            echo $this->field($form, $this->models[$keys[$i]], "[{$keys[$i]}]{$this->attribute}", $button);
        }
        if ($this->form->enableClientScript) {
            $dfClientOptions = [];
            for ($i = 0; $i != count($form->attributes); $i++) {
                if (strpos($form->attributes[$i]['name'], $this->attribute) !== false) {
                    $dfClientOptions[] = $form->attributes[$i];
                }
            }
            $dfClientOptions = Json::encode($dfClientOptions);
            $formClientOptions = Json::encode($this->form->attributes);
            $js = <<<JS
(function($) {
    var dfClientOptions = {$dfClientOptions},
        \$form = $('#{$this->form->id}');
    \$form.yiiActiveForm('data').attributes = {$formClientOptions};
    for (var i = 0; i != dfClientOptions.length; i++) {
        \$form.yiiActiveForm('add', dfClientOptions[i]);
    }
}(jQuery));
JS;
            $this->view->registerJs($js, View::POS_LOAD);
        }
        if ($this->pjax === true) {
            Pjax::end();
        }
    }

}
