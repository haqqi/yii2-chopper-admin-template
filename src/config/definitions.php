<?php

use mimicreative\datatables\assets\DataTableAsset;
use yii\web\View;

return [
    'yii\web\JqueryAsset'                           => [
        'js'        => ['jquery.min.js'],
        'jsOptions' => ['position' => View::POS_HEAD]
    ],
    'yii\bootstrap\BootstrapAsset'                  => [
        'css' => ['css/bootstrap.min.css']
    ],
    'yii\bootstrap\BootstrapPluginAsset'            => [
        'js'        => ['js/bootstrap.min.js'],
        'jsOptions' => ['position' => View::POS_HEAD]
    ],
    'mimicreative\assets\MetisMenuAsset'            => [
        'css' => []
    ],
    'mimicreative\datatables\assets\DataTableAsset' => [
        'styling' => DataTableAsset::STYLING_BOOTSTRAP
    ]
];
