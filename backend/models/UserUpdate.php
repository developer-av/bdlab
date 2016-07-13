<?php

namespace backend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class UserUpdate extends Model {

    public $id;
    public $username;
    public $email;
    public $oldpassword;
    public $password;
    public $password2;
    private $model;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'uniqueUsername'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email', 'checkDNS' => true],
            ['email', 'string', 'max' => 255],
            ['email', 'uniqueEmail'],
            ['oldpassword', 'required'],
            ['oldpassword', 'validatePassword'],
            ['password', 'string', 'min' => 6],
            ['password', 'passwordMatch'],
            [['password2', 'id'], 'safe'],
        ];
    }

    public function afterValidate() {
        parent::afterValidate();
        $this->password = null;
        $this->password2 = null;
        $this->oldpassword = null;
    }

    public function get() {
        $this->model = User::find()->where(['id' => \yii::$app->user->id])->one();
        $this->attributes = $this->model->attributes;
    }

    public function passwordMatch($attribute) {
        if ($this->password !== $this->password2) {
            $this->addError($attribute, "Пароли не совпадают");
        }
    }

    public function uniqueEmail($attribute) {
        $model = User::find()->where(['email' => $this->email])->one();
        if ($model && $model->id != \yii::$app->user->id) {
            $this->addError($attribute, "Этот E-mail уже занят");
        }
    }

    public function uniqueUsername($attribute) {
        $model = User::find()->where(['username' => $this->username])->one();
        if ($model && $model->id != \yii::$app->user->id) {
            $this->addError($attribute, "Этот логин уже занят");
        }
    }

    public function save() {
        if ($this->validate()) {
            $this->model->username = $this->username;
            if ($this->password) {
                $this->model->setPassword($this->password);
            }
            $this->model->email = $this->email;
            $this->model->save(false);
            return true;
        }
    }

    public function validatePassword($attribute) {
        if (!Yii::$app->security->validatePassword($this->oldpassword, $this->model->password_hash)) {
            $this->addError($attribute, 'Старый пароль указан неверно.');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'oldpassword' => 'Текущий пароль',
            'password' => 'Новый пароль',
            'password2' => 'Повторите пароль',
        ];
    }

}
