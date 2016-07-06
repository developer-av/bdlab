<?php

namespace app\components;

use yii\base\Widget;
use frontend\models\ContactForm;

class ContactWidget extends Widget {

    public function run() {
        $send = false;
        $model = new ContactForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $model->sendEmail(\Yii::$app->params['adminEmail']);
            $model = new ContactForm();
            $send = true;
        }
        return $this->render('contact', ['model' => $model, 'send' => $send]);
    }

}
