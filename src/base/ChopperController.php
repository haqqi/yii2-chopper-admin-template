<?php

namespace haqqi\chopper\base;

use haqqi\chopper\assets\ChopperAsset;

class ChopperController extends BasicController
{
    public $layout = '@haqqi/chopper/views/layouts/default';

    public function init()
    {
        parent::init();

        \Yii::$app->chopper->assetBundleClass = ChopperAsset::className();
    }
}