<?php

use haqqi\chopper\widgets\Panel;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;

?>

<div class="row">
    <div class="col-sm-6">
        <?php
        Panel::begin([
            'style'       => Panel::STYLE_DEFAULT,
            'icon'        => FA::icon('clock-o'),
            'title'       => 'How to Use',
            'description' => 'Simple tutorial of using panels',
            'footer'      => 'Other panel type and style is shown in this page.'
        ]);
        ?>

        <p>Panel contents / body can be added between <code>Panel::begin();</code> and <code>Panel::end();</code>.
            Please take a look at the source code of this page to understand more. You can also pass
            <code>body</code> parameter if using <code>Panel::widget();</code>. You can take a look at Yii2 guide
            for rendering a widget correctly.</p>

        <p>There are 3 possible types of panels:</p>

        <ul>
            <li><code>panel-type-clean</code></li>
            <li><code>panel-type-boxed</code></li>
            <li><code>panel-type-border</code></li>
        </ul>

        <p>And 6 possible styles of panels:</p>

        <ul>
            <li><code>panel-default</code></li>
            <li><code>panel-primary</code></li>
            <li><code>panel-success</code></li>
            <li><code>panel-info</code></li>
            <li><code>panel-warning</code></li>
            <li><code>panel-danger</code></li>
        </ul>

        <p>All above types and styles are to be defined as css class of the panel. Therefore, if you want to use
            <code>panel-type-clean</code> and <code>panel-primary</code>, the class should be written <code>class="panel
                panel-type-clean panel-primary"</code>.</p>

        <?php
        // close first panel
        Panel::end();

        // begin second panel
        Panel::begin([
            'type'        => Panel::TYPE_CLEAN,
            'style'       => Panel::STYLE_PRIMARY,
            'icon'        => FA::icon('briefcase'),
            'title'       => 'Panel Type Clean',
            'description' => 'With style primary',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>So, the source code of this panel might looks like below:</p>
        
        <pre><?php
            echo Html::encode(<<<EOT
<?php
Panel::begin([
    'type'        => Panel::TYPE_CLEAN,
    'style'       => Panel::STYLE_PRIMARY,
    'icon'        => FA::icon('briefcase'),
    'title'       => 'Panel Type Clean',
    'description' => 'With style primary',
    'footer'      => 'Just do not forget the full qualified class name.'
]);
?>

<p>Some content here</p>

<?php
Panel::end();
?>
EOT
);
            ?>
        </pre>
        
        <?php
        // end second panel
        Panel::end();

        // begin third panel
        Panel::begin([
            'type'        => Panel::TYPE_CLEAN,
            'style'       => Panel::STYLE_SUCCESS,
            'icon'        => FA::icon('industry'),
            'title'       => 'Panel Type Clean',
            'description' => 'With style success',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end third panel
        Panel::end();
        ?>
        
        <?php
        // begin #4 panel
        Panel::begin([
            'type'        => Panel::TYPE_CLEAN,
            'style'       => Panel::STYLE_WARNING,
            'icon'        => FA::icon('heartbeat'),
            'title'       => 'Panel Type Clean',
            'description' => 'With style warning',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #4 panel
        Panel::end();
        ?>

        <?php
        // begin #5 panel
        Panel::begin([
            'type'        => Panel::TYPE_CLEAN,
            'style'       => Panel::STYLE_DANGER,
            'icon'        => FA::icon('gift'),
            'title'       => 'Panel Type Clean',
            'description' => 'With style danger',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #5 panel
        Panel::end();
        ?>

        <?php
        // begin #6 panel
        Panel::begin([
            'type'        => Panel::TYPE_CLEAN,
            'style'       => Panel::STYLE_INFO,
            'icon'        => FA::icon('film'),
            'title'       => 'Panel Type Clean',
            'description' => 'With style info',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #6 panel
        Panel::end();
        ?>
    </div>

    <div class="col-sm-6">
        <?php
        // begin #1 panel
        Panel::begin([
            'type'        => Panel::TYPE_BORDER,
            'style'       => Panel::STYLE_DEFAULT,
            'icon'        => FA::icon('newspaper-o'),
            'title'       => 'Panel Type Standard',
            'description' => 'With style default',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #1 panel
        Panel::end();
        ?>

        <?php
        // begin #2 panel
        Panel::begin([
            'type'        => Panel::TYPE_BORDER,
            'style'       => Panel::STYLE_PRIMARY,
            'icon'        => FA::icon('newspaper-o'),
            'title'       => 'Panel Type Standard',
            'description' => 'With style primary',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #2 panel
        Panel::end();
        ?>

        <?php
        // begin #3 panel
        Panel::begin([
            'type'        => Panel::TYPE_BORDER,
            'style'       => Panel::STYLE_SUCCESS,
            'icon'        => FA::icon('newspaper-o'),
            'title'       => 'Panel Type Standard',
            'description' => 'With style success',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #3 panel
        Panel::end();
        ?>

        <?php
        // begin #4 panel
        Panel::begin([
            'type'        => Panel::TYPE_BORDER,
            'style'       => Panel::STYLE_INFO,
            'icon'        => FA::icon('newspaper-o'),
            'title'       => 'Panel Type Standard',
            'description' => 'With style info',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #4 panel
        Panel::end();
        ?>

        <?php
        // begin #5 panel
        Panel::begin([
            'type'        => Panel::TYPE_BORDER,
            'style'       => Panel::STYLE_WARNING,
            'icon'        => FA::icon('newspaper-o'),
            'title'       => 'Panel Type Standard',
            'description' => 'With style warning',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #5 panel
        Panel::end();
        ?>

        <?php
        // begin #6 panel
        Panel::begin([
            'type'        => Panel::TYPE_BORDER,
            'style'       => Panel::STYLE_DANGER,
            'icon'        => FA::icon('newspaper-o'),
            'title'       => 'Panel Type Standard',
            'description' => 'With style danger',
            'footer'      => 'Just do not forget the full qualified class name.'
        ]);
        ?>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>

        <?php
        // end #6 panel
        Panel::end();
        ?>
    </div>
</div>

<?php
