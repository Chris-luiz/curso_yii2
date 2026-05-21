<?php

namespace app\models;

use yii\base\Model;

class Formulario extends Model
{
    public $nome;
    public $idade;

    public function rules()
    {
        return [
            [['nome', 'idade'], 'required'],
            // ['email', 'email'],
        ];
    }

    public function completarNome()
    {
        return $this->nome . 'da Silva';
    }
}