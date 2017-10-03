<?php

namespace haqqi\chopper;

use haqqi\chopper\assets\ChopperBasicAsset;
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
    const LAYOUT_BASE = 'base';
    const LAYOUT_DEFAULT = 'default';

    // style alternatives
    const STYLE_DEFAULT = 'default';

    ////////////////////////////////////////////
    ///// Template variable area ///////////////
    ////////////////////////////////////////////

    /** @var string Asset bundle class to be registered in the layout. Customizable via configuration. This class must depends on ChopperAsset. The default will be ChopperAsset itself. */
    public $assetBundleClass;

    /** @var string Path to sidebar meu item */
    public $sidebarMenuItemsPath;
    
    /** @var string|array URL of the logo. You can use relative, absolute, or full URL in this, because chopper template will call the URL with `urlManager->create()`. */
    public $logoSmallUrl;
    public $logoLargeUrl;
    public $logoLoginUrl;

    /** @var boolean Use the logo URLs as is (without `urlManager->create()`). */
    public $fixedLogoUrls;

    public $style = self::STYLE_DEFAULT;

    public function __construct($config = [])
    {
        $this->assetBundleClass = ChopperBasicAsset::className();

        $this->sidebarMenuItemsPath = __DIR__ . '/config/sidebar-menu.php';

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

        if (!isset($bundles[ChopperBasicAsset::className()])) {
            throw new InvalidConfigException('Asset bundle class must use or depends on '.ChopperBasicAsset::className().' bundle.');
        }

        return $bundles[ChopperBasicAsset::className()]->baseUrl . '/' . $filepath;
    }

    public function registerThemeAsset($view)
    {
        /** @var AssetBundle $assetBundleClass */
        $assetBundleClass = $this->assetBundleClass;
        $assetBundleClass::register($view);
    }
    
    public function getLogoSmallUrl() {
        if ($this->logoSmallUrl === null) {
            return $this->getAssetUrl('img/logo-small.png');
        }

        if (is_string($this->logoSmallUrl) && $this->fixedLogoUrls === true) {
            return $this->logoSmallUrl;
        }

        return \Yii::$app->urlManager->createUrl($this->logoSmallUrl);
    }
    
    public function getLogoLargeUrl() {
        if ($this->logoLargeUrl === null) {
            return $this->getAssetUrl('img/logo-large.png');
        }

        if (is_string($this->logoLargeUrl) && $this->fixedLogoUrls === true) {
            return $this->logoLargeUrl;
        }

        return \Yii::$app->urlManager->createUrl($this->logoLargeUrl);
    }
    
    public function getLogoLoginUrl() {
        if ($this->logoLoginUrl === null) {
            return $this->getAssetUrl('img/logo-login.png');
        }

        if (is_string($this->logoLoginUrl) && $this->fixedLogoUrls === true) {
            return $this->logoLoginUrl;
        }

        return \Yii::$app->urlManager->createUrl($this->logoLoginUrl);
    }
}
