<?php

/** @var \yii\web\View $this */

use haqqi\chopper\Chopper;
use yii\helpers\Html;
use yii\helpers\Url;

$this->beginPage();

?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language; ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">

        <!-- icon -->
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode($this->title); ?></title>

        <!-- js helper -->
        <script type="text/javascript">
          var BASE_URL = '<?= Url::base(true); ?>';
        </script>

        <!-- SEO things -->
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    
    <div id="wrapper">
        <section id="page-content">
            <?= $content; ?>
        </div>
    </div>

    <?php $this->endBody(); ?>
    </body>
    </html>

<?php

$this->endPage();
