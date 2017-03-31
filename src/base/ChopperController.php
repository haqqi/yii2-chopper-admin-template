<?php

namespace haqqi\chopper\base;

use haqqi\chopper\assets\ChopperAsset;
use yii\web\Controller;

class ChopperController extends Controller
{
    public $layout = '@haqqi/chopper/views/layouts/default';

    public function beforeAction($action)
    {
        \Yii::$app->chopper->assetBundleClass = ChopperAsset::className();

        return parent::beforeAction($action);
    }
}