<?php

namespace app\controllers;

use app\models\Formulario;
use app\models\Pessoa;
use yii\web\Controller;

class FormularioController extends Controller
{
    public function actionIndex()
    {
        $variaveis = $this->request->get();

        $formulario = new Formulario();
        $formulario->nome = $variaveis['nome'];
        $formulario->idade = $variaveis['idade'];
        // $formulario->nome = $formulario->completarNome();

        $pessoa = new Pessoa();
        $response = $pessoa->find()->all();
       
        return $this->render('index', [
            'pessoas' => $response,
        ]);
    }

    public function actionCriar()
    {
        echo 'Criando';
    }
}