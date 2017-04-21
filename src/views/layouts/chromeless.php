<?php

/** @var \yii\web\View $this */

use haqqi\chopper\Chopper;

$this->beginContent('@haqqi/chopper/views/layouts/base.php');

?>

    <div id="wrapper">
        <section id="page-content">
            <?= $content; ?>
        </div>
    </div>

<?php

$this->endContent();
