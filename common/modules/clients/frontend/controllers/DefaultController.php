<?php

namespace common\modules\clients\frontend\controllers;

use yii\web\Controller;

class DefaultController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

}
