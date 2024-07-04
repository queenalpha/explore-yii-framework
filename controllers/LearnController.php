<?php 
namespace app\controllers;

use Yii;

use app\models\LoginForm;
use app\models\RegisterForm;
use yii\base\Controller;

class LearnController extends Controller{
    public function actionIndex(){
        return $this->render('index');
    }
    

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    // public function actionRegister()
    // {
    //     $model = new RegisterForm();

    //     if ($model->load(Yii::$app->request->post()) && $model->register()) {
    //         Yii::$app->session->setFlash('success', 'Registration successful. You can now log in.');
    //         return $this->redirect(['login']);
    //     } else {
    //         return $this->render('register', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

}