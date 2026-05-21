<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pessoa]].
 *
 * @see Pessoa
 */
class PessoaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pessoa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pessoa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
