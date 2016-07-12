<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Services;
use yii\web\NotFoundHttpException;

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
    public function actionServiceInner($id) {
        $model = Services::find()->with('servicesProperty')->asArray()->where(['id' => $id])->one();
        if($model == NULL)
        {
            throw new NotFoundHttpException;
        }
        return $this->render('service-inner', ['model' => $model]);
    }

}
