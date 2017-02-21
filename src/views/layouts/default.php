<?php

/** @var \yii\web\View $this */

use haqqi\chopper\Chopper;
use haqqi\chopper\widgets\SidebarMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

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
            <nav class="navbar navbar-static-top">
                <div class="container-fluid">
                    <div id="logo-area">
                        <a href="#">
                            <img src="<?php echo Chopper::getComponent()->getAssetUrl('img/logo-small.png') ?>" alt="logo-small" class="logo-small" />
                            <img src="<?php echo Chopper::getComponent()->getAssetUrl('img/logo-large.png') ?>" alt="logo-large" class="logo-large" />
                        </a>
                    </div>

                    <div class="left-menu">
                        <!-- Toggle icon for mobile view -->
                        <a id="sidebar-drop-toggle" class="navbar-toggle visible-xs" href="javascript:void(0)" data-toggle="collapse"
                           data-target="#main-sidebar">
                            <i class="mdi mdi-menu"></i>
                        </a>

                        <!-- Toggle icon for left sidebar menu -->
                        <a id="sidebar-toggle" href="javascript:void(0)" class="navbar-toggle hidden-xs">
                            <i class="mdi mdi-publish mdi-rotate-270"></i>
                        </a>
                    </div>
                    
                    <div class="right-menu">
                        
                    </div>
                </div>


            </nav>
        </header>

        <div id="page-container">
            <!-- Left navbar-sidebar -->
            <aside id="main-sidebar" class="navbar-collapse collapse">
                <?php echo SidebarMenu::widget(); ?>
            </aside>
            <!-- Left navbar-sidebar end -->

            <!-- #page-wrapper -->
            <div id="page-wrapper">
                <?php
                // setting up header
                $pageHeader = [];
                if (isset($this->params['pageBreadcrumb'])) {
                    $pageHeader['breadcrumb'] = $this->params['pageBreadcrumb'];
                }
                if (isset($this->params['pageTitle'])) {
                    $pageHeader['title'] = $this->params['pageTitle'];
                }

                if (count($pageHeader) > 0) {
                    ?>
                    <header id="page-header">
                        <?php
                        if (isset($pageHeader['breadcrumb'])) {
                            echo Breadcrumbs::widget([
                                'homeLink' => false,
                                'links'    => $pageHeader['breadcrumb']
                            ]);
                        }

                        if (isset($pageHeader['title'])) {
                            echo '<h1 class="title">' . $pageHeader['title'] . '</h1>';

                            if (isset($this->params['pageDescription'])) {
                                echo '<div class="description">' . $this->params['pageDescription'] . '</div>';
                            }
                        }

                        ?>
                    </header>
                <?php } ?>
                <section id="page-content">
                    <?= $content; ?>
                </section>
            </div>
            <!-- /#page-wrapper -->
        </div>

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
