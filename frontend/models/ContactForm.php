<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $name;
    public $phone;
    public $email;
    public $href;
    public $body;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['href', 'phone'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'phone' => 'Телефон',
            'email' => 'Электронная почта',
            'href' => 'Ваш профиль в соц. сетях',
            'body' => 'Ваш вопрос',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email) {

        $message = 'Заявка от: ' . $this->name."\r\n";
        if (!empty($this->phone)) {
            $message .= 'Номер: ' . $this->phone."\r\n";
        }
        $message .= 'E-mail: ' . $this->email."\r\n";
        if (!empty($this->href)) {
            $message .= 'Соц. сеть: ' . $this->href."\r\n";
        }
        $message .= 'Вопрос: ' . $this->body;

        return Yii::$app->mailer->compose()
                        ->setTo($email)
                        ->setFrom([$this->email => $this->name])
                        ->setSubject('Заявка с сайта лаборатории')
                        ->setTextBody($message)
                        ->send();
    }

}
