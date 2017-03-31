<?php

namespace haqqi\chopper\base;

use haqqi\chopper\Chopper;
use yii\web\Controller;

class BasicController extends Controller
{
    public $layout = '@haqqi/chopper/views/layouts/' . Chopper::LAYOUT_BASE;
}