<?php

namespace haqqi\chopper\base;

use haqqi\chopper\assets\ChopperAsset;

class ChopperController extends BasicController
{
    public $layout = '@haqqi/chopper/views/layouts/default';

    public function beforeAction($action)
    {
        \Yii::$app->chopper->assetBundleClass = ChopperAsset::className();

        return parent::beforeAction($action);
    }
}