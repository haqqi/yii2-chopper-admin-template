<?php

namespace haqqi\chopper;

use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;

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
        return ArrayHelper::getValue(\Yii::$app->params, 'chopper.'.$key, null);
    }
}