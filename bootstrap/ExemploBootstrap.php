<?php

namespace app\bootstrap;

use yii\base\BootstrapInterface;

class ExemploBootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->id = 'id gerando no bootstrap';
    }
}