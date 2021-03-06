<?php

namespace haqqi\chopper\assets;

use haqqi\chopper\Chopper;
use yii\base\InvalidConfigException;
use yii\web\AssetBundle;

class ChopperBasicAsset extends AssetBundle
{
    public $sourcePath = '@haqqi/chopper/web';

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'mimicreative\assets\Html5ShivAsset',
        'mimicreative\assets\RespondAsset',
        'mimicreative\assets\SimpleLineIconsAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\materialicons\AssetBundle'
    ];
    
    public $css = [
        // default font
        'https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,700,700i',
        'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700',

        'css/chopper-main.css'
    ];

    public $publishOptions = [
        'forceCopy' => YII_ENV == YII_ENV_DEV ? true : false
    ];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        $this->_setupStyle();
    }

    private function _setupStyle() {
        $style = Chopper::getComponent()->style;

        if(is_file(\Yii::getAlias($this->sourcePath . '/css/styles/') . $style . '.css')) {
            $style = 'css/styles/' . $style . '.css';
        } else {
            throw new InvalidConfigException('Style name is not exists');
        }

        // add css style
        array_push($this->css, $style);
    }
}
