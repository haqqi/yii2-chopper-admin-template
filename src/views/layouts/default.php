<?php

/** @var \yii\web\View $this */

use haqqi\chopper\Chopper;
use yii\helpers\Html;
use yii\helpers\Url;

Chopper::getComponent()->registerThemeAsset($this);

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

    <div id="wrapper">
        <header id="main-header">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    
                    
                    <div class="navbar-header pull-right">
                        <ul class="nav pull-left">
                            <li class="navbar-text pull-left">User Name</li>
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Left navbar-sidebar -->
        <aside id="main-sidebar">

        </aside>
        <!-- Left navbar-sidebar end -->

        <!-- #page-wrapper -->
        <div id="page-wrapper">
            <div id="page-content">

                <?= $content; ?>
            </div>
        </div>
        <!-- /#page-wrapper -->

        <!-- #main-footer -->
        <footer id="main-footer">
            <?php echo Chopper::getParams('footer'); ?>
        </footer>
        <!-- /#main-footer -->
    </div>

    <?php $this->endBody(); ?>
    </body>
    </html>

<?php

$this->endPage();
