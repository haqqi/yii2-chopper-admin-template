<?php

namespace haqqi\chopper\controllers;

use haqqi\chopper\base\ChopperController;

class FeatureController extends ChopperController
{
    public function actionPanel()
    {
        $this->view->title = 'Feature - Panels | Yii2 Chopper Admin Template';

        $this->view->params['pageBreadcrumb'] = [
            [
                'label' => 'Features',
                'url' => ['feature/index']
            ],
            'Panels'
        ];
        $this->view->params['pageTitle'] = 'Panels';
        $this->view->params['pageDescription'] = 'Useful panels you can use.';

        return $this->render('panel');
    }
}