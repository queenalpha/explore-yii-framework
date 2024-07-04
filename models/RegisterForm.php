<?php

namespace app\models;

use Yii;
use yii\base\Model;

namespace app\models;

use yii\base\Model;
use Yii;

class RegisterForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['username', 'email'], 'string', 'max' => 255],
            [['username'], 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            [['email'], 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            [['email'], 'email'],
            [['password'], 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool|null whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey(); // Add this line

        return $user->save() ? $user : null;
    }
}
