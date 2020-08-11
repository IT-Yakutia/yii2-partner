<?php

namespace ityakutia\partner;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'ityakutia\partner\controllers';
    public $defaultRoute = 'partner';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}