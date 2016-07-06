<?php

namespace common\modules\clients\frontend\components;

use yii\base\Widget;
use common\modules\clients\common\models\Clients as ClientsModel;

class Clients extends Widget {

    public function init() {
        parent::init();
    }

    public function run() {
        $models = ClientsModel::find()->orderBy('id desc')->all();
        return $this->render('clients', ['models' => $models]);
    }

}
