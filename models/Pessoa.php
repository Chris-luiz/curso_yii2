<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoa".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property int|null $idade
 * @property string|null $cidade
 */
class Pessoa extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idade'], 'default', 'value' => null],
            [['cidade'], 'default', 'value' => 'Manaus'],
            [['nome', 'email'], 'required'],
            [['idade'], 'integer'],
            [['nome', 'email'], 'string', 'max' => 100],
            [['cidade'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'idade' => 'Idade',
            'cidade' => 'Cidade',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PessoaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PessoaQuery(get_called_class());
    }

}
