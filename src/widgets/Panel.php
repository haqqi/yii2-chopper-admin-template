<?php

namespace haqqi\chopper\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Panel extends Widget
{
    const TYPE_CLEAN    = 'clean';
    const TYPE_BORDER   = 'border';
    const TYPE_BOXED    = 'boxed';

    const STYLE_DEFAULT = 'default';
    const STYLE_PRIMARY = 'primary';
    const STYLE_DANGER  = 'danger';
    const STYLE_INFO    = 'info';
    const STYLE_WARNING = 'warning';
    const STYLE_SUCCESS = 'success';

    /** @var string Type of panel. The options are standard|clean|boxed */
    public $type = Panel::TYPE_CLEAN;

    /** @var string $style Panel style. You can choose from default|primary|danger|info|warning|success */
    public $style = Panel::STYLE_DEFAULT;

    /** @var string $color Color style that override the style. If it is empty string, it will not be rendered. */
    public $color = '';

    /** @var string $icon Icon of the panel, before title. */
    public $icon;

    /** @var string $title Panel title. */
    public $title;

    /** @var string $description Panel description. Rendered after title. */
    public $description;

    /** @var string $body Panel body. */
    public $body;

    /** @var string $footer Panel footer. */
    public $footer;

    public function init()
    {
        parent::init();

        // open panel tag
        echo Html::beginTag('section', ['class' => [
            'panel',
            'panel-' . $this->style,
            'panel-type-' . $this->type
        ]]);

        $this->_renderHeader();

        // open body tag
        echo Html::beginTag('div', ['class' => 'panel-body']);
    }

    public function run()
    {
        if (!empty($this->body)) {
            echo $this->body;
        }

        // close body tag
        echo Html::endTag('div');

        $this->_renderFooter();

        // close panel tag
        echo Html::endTag('section');
    }

    private function _renderHeader()
    {
        // if there is any content in the heading area
        if (true) {
            // open header tag
            echo Html::beginTag('header', ['class' => 'panel-heading']);

            $this->_renderTitle();

            // close header tag
            echo Html::endTag('header');
        }
    }

    private function _renderFooter()
    {
        if ($this->footer === null) {
            return;
        }

        echo Html::tag('footer', $this->footer, ['class' => 'panel-footer']);
    }

    private function _renderTitle()
    {
        // if there is no title, then no use to continue
        if ($this->title === null) {
            return;
        }

        // open title tag
        echo Html::beginTag('div', ['class' => 'panel-title']);

        // printing the title and icon
        echo Html::beginTag('h3');
        if ($this->icon !== null) {
            echo $this->icon . ' ';
        }
        echo $this->title;
        echo Html::endTag('h3');

        // print the description
        if ($this->description !== null) {
            echo Html::tag('span', $this->description, ['class' => 'description']);
        }

        // close title tag
        echo Html::endTag('div');
    }
}
