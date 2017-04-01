<?php

/** @var \yii\web\View $this */

use haqqi\chopper\Chopper;
use haqqi\chopper\widgets\SidebarMenu;
use yii\widgets\Breadcrumbs;

$this->beginContent('@haqqi/chopper/views/layouts/base.php');

?>
    <header id="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <div id="logo-area">
                    <a href="<?php echo Yii::$app->getHomeUrl(); ?>">
                        <img src="<?php echo Chopper::getComponent()->getLogoSmallUrl(); ?>" alt="logo-small"
                             class="logo-small"/>
                        <img src="<?php echo Chopper::getComponent()->getLogoLargeUrl(); ?>" alt="logo-large"
                             class="logo-large"/>
                    </a>
                </div>

                <div class="left-menu">
                    <!-- Toggle icon for mobile view -->
                    <a id="sidebar-drop-toggle" class="navbar-toggle visible-xs" href="javascript:void(0)"
                       data-toggle="collapse"
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
            <div id="sidebar-wrapper">
                <?php echo SidebarMenu::widget(); ?>
            </div>
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

<?php

$this->endContent();
