<?php

namespace haqqi\chopper\controllers;

use haqqi\chopper\base\ChopperController;

class DashboardController extends ChopperController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}