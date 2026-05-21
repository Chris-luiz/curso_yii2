<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use DateTime;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        echo \Yii::$app->id . '<br>';
        echo \Yii::$app->basePath . '<br>';
        echo \Yii::getAlias("@bower") . '<br>';
        echo \Yii::getAlias("@npm") . '<br>';
        echo \Yii::getAlias("@vendor") . '<br>';
        echo \Yii::getAlias("@app") . '<br>';
        echo \Yii::getAlias("@controllers") . '<br>';

        echo \Yii::$app->params['MAX_SIZE'] . '<br>';


        echo \Yii::$app->language . '<br>';
        echo \Yii::$app->sourceLanguage . '<br>';
        echo \Yii::$app->timeZone . '<br>';

        echo (new DateTime())->format('H:i:s') . '<br>';

        echo \Yii::$app->charset . '<br>';
        echo \Yii::$app->defaultRoute . '<br>';
        echo \Yii::$app->layout . '<br>';
        echo \Yii::$app->layoutPath . '<br>';
        echo \Yii::$app->runtimePath . '<br>';


        // $path = \Yii::$app->basePath . '/asse
        // echo \Yii::getAlias("@npm") . '<br>';ts/imagens/jpg';
        // echo $path;
        die;

        return $this->render('index');
    }

    public function actionOffline()
    {
        return 'Estou Em manutenção';
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionNovaPagina()
    {
        $nome4 = 'Carlos';

        return $this->render('minha_pagina', [
            'nome1' => 'João',
            'nome2' => 'Maria',
            'nome3' => 'Pedro',
            'nome4' => $nome4,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
