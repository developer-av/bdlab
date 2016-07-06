<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Services;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $this->layout = 'home';
        return $this->render('index');
    }

    /**
     * Displays servicespage.
     *
     * @return mixed
     */
    public function actionServices() {
        $models = Services::find()->orderBy('id DESC')->with('servicesProperty')->asArray()->all();
        return $this->render('services', ['models' => $models]);
    }

    /**
     * Displays servicespage.
     *
     * @return mixed
     */
    public function actionSeviceInner($id) {
        $model = Services::find()->with('servicesProperty')->asArray()->where($id)->one();
        return $this->render('sevice-inner', ['model' => $model]);
    }

}
