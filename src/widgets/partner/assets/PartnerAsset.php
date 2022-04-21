<?php

namespace ityakutia\partner\widgets\partner\assets;

use yii\web\AssetBundle;

class PartnerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/partner/widgets/partner/assets/src/';
    
    public $css = [
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/widget.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
        'js/widget.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
