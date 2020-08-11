<?php

namespace ityakutia\partner;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface {

    public function bootstrap($app)
    {
        $app->setModule('partner', 'ityakutia\partner\Module');
    }
}