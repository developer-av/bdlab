<?php

namespace app\components;

use yii\base\Widget;
use frontend\models\ContactForm;
use \DrewM\MailChimp\MailChimp;

class ContactWidget extends Widget {

    public function run() {
        $send = false;
        $model = new ContactForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $model->sendEmail(\Yii::$app->params['adminEmail']);
            $MailChimp = new MailChimp(\Yii::$app->params['mailchimpApiKay']);
            $list_id = \Yii::$app->params['mailchimpListId'];
            $MailChimp->post("lists/$list_id/members", [
                'email_address' => $model->email,
                'status' => 'subscribed',
            ]);
            $model = new ContactForm();
            $send = true;
        }
        return $this->render('contact', ['model' => $model, 'send' => $send]);
    }

}
