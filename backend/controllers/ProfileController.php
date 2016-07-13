<?php

namespace backend\controllers;

use backend\models\UserUpdate;
use Yii;

class ProfileController extends \yii\web\Controller {

    public function actionIndex() {
        $model = new UserUpdate;
        $model->get();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            Yii::$app->session->setFlash('success', 'Сохраненно');
        }
        return $this->render('index', ['model' => $model]);
    }

}
