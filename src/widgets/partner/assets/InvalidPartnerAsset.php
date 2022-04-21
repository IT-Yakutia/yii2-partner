<?php

namespace ityakutia\partner\widgets\partner\assets;

use yii\web\AssetBundle;

class InvalidPartnerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/partner/widgets/partner/assets/src/';
    
    public $css = [
        'css/invalid.css',
    ];
    public $js = [
    ];
    public $depends = [
        'ityakutia\partner\widgets\partner\assets\PartnerAsset',
    ];
}
