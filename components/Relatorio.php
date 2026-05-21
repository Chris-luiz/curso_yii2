<?php

namespace app\components;

use DateTime;
use Exception;
use stdClass;
use yii\base\Component;

class Xlsx 
{
    public $dados;

    public function from($dados)
    {
        $this->dados = $dados;
    }

    public function run()
    {
        echo 'Relatório sendo gerado...';
    }
}

class Relatorio extends Component
{
    public $formatoDefault;

    private const FORMATOS = [
        'csv',
        'xlsx',
        'txt',
    ];

    public function gerarRelatorio($dados, string $formato)
    {
        if (!in_array($formato, self::FORMATOS)) {
            throw new Exception("Formato não aceito");
        }

        $classeXlsx = new Xlsx();
        $classeXlsx->from($dados);
        $classeXlsx->run();
    }

    public function formatosValidos()
    {
        return self::FORMATOS;
    }

}
