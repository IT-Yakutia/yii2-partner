<?php

namespace ityakutia\partner\widgets\partner\assets;

use yii\web\AssetBundle;

class PartnerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/partner/widgets/partner/assets/src/';
    
    public $css = [
        'css/widget.css',
    ];
    public $js = [
        'js/widget.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'ityakutia\owl\OwlAsset',
    ];
}
