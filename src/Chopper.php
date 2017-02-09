<?php

namespace haqqi\chopper;

use mimicreative\datatables\assets\DataTableAsset;
use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\web\View;

class Chopper extends Component implements BootstrapInterface
{
    /** @var string Final component name to be used in the application */
    public static $componentName = 'chopper';
    
    /** @var string Version of this extension */
    public static $version = '1.0';

    ////////////////////////////////////////////
    ////// Constant area ///////////////////////
    ////////////////////////////////////////////

    // layout alternatives
    const LAYOUT_DEFAULT = 'default';

    // style alternatives
    const STYLE_DEFAULT = 'default';

    ////////////////////////////////////////////
    ///// Template variable area ///////////////
    ////////////////////////////////////////////
    
    
    public function bootstrap($app)
    {
        \Yii::$container->set('yii\web\JqueryAsset', [
            'js'        => ['jquery.min.js'],
            'jsOptions' => ['position' => View::POS_HEAD]
        ]);

        \Yii::$container->set('yii\bootstrap\BootstrapAsset', [
            'css' => ['css/bootstrap.min.css']
        ]);

        \Yii::$container->set('yii\bootstrap\BootstrapPluginAsset', [
            'js'        => ['js/bootstrap.min.js'],
            'jsOptions' => ['position' => View::POS_HEAD]
        ]);

        \Yii::$container->set('mimicreative\assets\MetisMenuAsset', [
            'css' => []
        ]);

        \Yii::$container->set('mimicreative\datatables\assets\DataTableAsset', [
            'styling' => DataTableAsset::STYLING_BOOTSTRAP
        ]);
    }
}