<?php

namespace common\modules\about\frontend\controllers;

use common\modules\about\common\models\About;
use yii\web\Controller;

/**
 * DefaultController implements the CRUD actions for About model.
 */
class DefaultController extends Controller {

    /**
     * Lists all About models.
     * @return mixed
     */
    public function actionIndex() {
        $models = About::find()->all();

        return $this->render('index', [
                    'models' => $models,
        ]);
    }

    /**
     * Lists all About models.
     * @return mixed
     */
    public function actionContact() {
        $models = About::find()->all();

        $this->layout = 'contact';

        return $this->render('contact', [
                    'models' => $models,
        ]);
    }

}
