<?php

use haqqi\chopper\widgets\Panel;
use rmrevin\yii\fontawesome\FA;

?>

<div class="row">
    <div class="col-sm-6">
        <?php
        Panel::begin([
            'style' => Panel::STYLE_PRIMARY,
            'icon' => FA::icon('clock-o'),
            'title' => 'How to Use',
            'description' => 'Simple tutorial of using panels',
            'footer' => 'Other panel type and style is shown in this page.'
        ]);
        ?>
        
        <p>Panel contents / body can be added between <code>Panel::begin();</code> and <code>Panel::end();</code>. Please take a look at the source code of this page to understand more. You can also pass <code>body</code> parameter if using <code>Panel::widget();</code>. You can take a look at Yii2 guide for rendering a widget correctly.</p>
        
        <p>There are 3 possible types of panels:</p>

        <ul>
            <li><code>panel-type-clean</code></li>
            <li><code>panel-type-boxed</code></li>
            <li><code>panel-type-standard</code></li>
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
        
        <p>All above types and styles are to be defined as css class of the panel. Therefore, if you want to use <code>panel-type-clean</code> and <code>panel-primary</code>, the class should be written <code>class="panel panel-type-clean panel-primary"</code>.</p>
        
        <?php
        Panel::end();
        ?>
    </div>
    
    <div class="col-sm-6">
        
    </div>
</div>

<?php
