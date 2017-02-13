<?php

namespace haqqi\chopper;

use haqqi\chopper\assets\DemoAsset;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        
        // set for demo asset
        \Yii::$container->set(Chopper::className(), [
            'assetBundleClass' => DemoAsset::className()
        ]);
    }

}