<?php

namespace haqqi\chopper\assets;

use haqqi\chopper\Chopper;
use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

class ChopperAsset extends AssetBundle
{
    public $sourcePath = '@haqqi/chopper/web';
    
    public $depends = [
        'haqqi\chopper\assets\ChopperBasicAsset',
        'mimicreative\assets\MetisMenuAsset',
        'mimicreative\assets\ScrollatorAsset',
    ];
    
    public $css = [
        'css/chopper-main.css'
    ];
    
    public $js = [
        'js/chopper-main.js'
    ];
    
    public $publishOptions = [
        'forceCopy' => YII_ENV == YII_ENV_DEV ? true : false
    ];
}
