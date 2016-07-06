<?php

namespace app\components;

use yii\base\Widget;
use common\models\Slider;

class SliderWidget extends Widget {

    public function run() {
        $models = Slider::find()->asArray()->all();
        return $this->render('slider', ['models' => $models]);
    }

}
