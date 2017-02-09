<?php

/** @var \yii\web\View $this */

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

    <!-- icon -->
      <?php echo Html::csrfMetaTags(); ?>
    <title><?php echo Html::encode($this->title); ?></title>

    <!-- js helper -->
    <script type="text/javascript">
      var BASE_URL = '<?= Url::base(true); ?>';
    </script>

    <!-- SEO things -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="robots" content="INDEX/FOLLOW">
      <?php $this->head(); ?>
  </head>
  <body>
  <?php $this->beginBody(); ?>

  <?= $content; ?>

  <?php $this->endBody(); ?>
  </body>
  </html>

<?php

$this->endPage();
