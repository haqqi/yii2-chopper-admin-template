<?php

namespace haqqi\chopper;

use yii\base\BootstrapInterface;
use yii\helpers\ArrayHelper;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        // run this if only the chopper component is loaded / defined
        if($app->has(Chopper::$componentName)) {
            // setup default params for chopper template
            $app->params = ArrayHelper::merge(require(__DIR__ . '/config/params.php'), \Yii::$app->params);

            // override the definitions if any
            \Yii::$container->setDefinitions(require(__DIR__ . '/config/definitions.php'));
        } else {
            \Yii::info('Component chopper is not loaded. No need to set the definitions.');
        }
    }

}