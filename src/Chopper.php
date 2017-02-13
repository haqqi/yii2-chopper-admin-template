<?php

namespace haqqi\chopper;

use haqqi\chopper\assets\ChopperAsset;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\web\AssetBundle;

class Chopper extends Component
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

    /** @var string Asset bundle class to be registered in the layout. Customizable via configuration. This class must depends on ChopperAsset. The default will be ChopperAsset itself. */
    public $assetBundleClass;

    public function __construct($config = [])
    {
        $this->assetBundleClass = ChopperAsset::className();

        parent::__construct($config);
    }

    /**
     * @return null|Chopper|object
     * @throws InvalidConfigException
     */
    public static function getComponent()
    {
        try {
            return \Yii::$app->get(self::$componentName);
        } catch (InvalidConfigException $e) {
            throw new InvalidConfigException('Component name should be set and named "' . self::$componentName . '".');
        }
    }

    public static function getParams($key)
    {
        return ArrayHelper::getValue(\Yii::$app->params, 'chopper.' . $key, null);
    }

    /**
     * @param string $filepath
     * @return string
     */
    public function getAssetUrl($filepath = '')
    {
        $bundles = \Yii::$app->assetManager->bundles;
        
        if (!isset($bundles[ChopperAsset::className()])) {
            throw new InvalidConfigException('Asset bundle class must use or depends on ChopperAsset bundle.');
        }
        
        return $bundles[ChopperAsset::className()]->baseUrl . '/' . $filepath;
    }

    public function registerThemeAsset($view)
    {
        /** @var AssetBundle $assetBundleClass */
        $assetBundleClass = $this->assetBundleClass;
        $assetBundleClass::register($view);
    }
}