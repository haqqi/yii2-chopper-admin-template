<?php

namespace haqqi\chopper\assets;

use yii\web\AssetBundle;

class DemoAsset extends AssetBundle
{
    public $sourcePath = '@haqqi/chopper/web';

    public $depends = [
        'haqqi\chopper\assets\ChopperAsset'
    ];

    public $css = [
        'css/demo.css'
    ];

    public $js = [

    ];

    public $publishOptions = [
        'forceCopy' => YII_ENV == YII_ENV_DEV ? true : false
    ];
}
