<?php

use haqqi\chopper\widgets\Panel;
use rmrevin\yii\fontawesome\FA;

?>

<div class="row">
    <div class="col-sm-6">
        <?php
        Panel::begin([
            'icon' => FA::icon('clock-o'),
            'title' => 'Standard Panel',
            'description' => 'This is rendered via begin and end',
            'footer' => 'Footer panel is rendered here.'
        ]);
        ?>
        
        <p>Panel contents / body can be added between <code>Panel::begin();</code> and <code>Panel::end();</code>. Please take a look at the source code of this page to understand more. You can also pass <code>body</code> parameter if using <code>Panel::widget();</code>.</p>
        
        <?php
        Panel::end();
        ?>
    </div>
    
    <div class="col-sm-6">
        
    </div>
</div>

<?php
