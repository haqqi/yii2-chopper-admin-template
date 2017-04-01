<?php

use common\forms\LoginForm;
use haqqi\chopper\Chopper;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\web\View;

/** @var View $this */
/** @var LoginForm $loginForm */

?>

    <div class="login-wrapper">
        <div class="login-box">
            <header class="login-logo">
                <img src="<?php echo Chopper::getComponent()->getLogoLoginUrl(); ?>" alt="logo-large" class="logo-large" />
            </header>

            <div class="login-content">
                <h1><?= isset($this->params['pageTitle']) ? $this->params['pageTitle'] : 'Admin Login'; ?></h1>
                
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($loginForm, 'email')->textInput(['autofocus' => true]); ?>

                <?= $form->field($loginForm, 'password')->passwordInput(); ?>

                <hr>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

        <footer class="login-footer">
            <?php echo Chopper::getParams('loginFooter'); ?>
        </footer>
    </div>

    

<?php

