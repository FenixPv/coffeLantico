<?php

/**
 * @var $model LoginForm
 */

use app\modules\user\models\LoginForm;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Войти CAFFÉ L\'Antico';
?>
<div class="site-default-login page py-5">
    <article class="d-flex justify-content-center align-items-center py-5">
        <section class="text-light text-center p-5 surface-dark">
            <h1 class="fs-1 caffelantico">Войти</h1>
            <p>Для входа введите логин и пароль:</p>
            <?php
            $form = ActiveForm::begin(['id' => 'login-form']);

            echo $form->field($model, 'username')->textInput([
                    'placeholder' => 'Логин',
                    'class' => 'form-control form-control-lg form-control-dark shadow',
            ])->label(false);

            echo $form->field($model, 'password')->passwordInput([
                'placeholder' => 'Пароль',
                'class' => 'form-control form-control-lg form-control-dark shadow',
            ])->label(false);
            ?>
            <div class="form-check form-switch">
            <?php
            echo $form->field($model, 'rememberMe')->checkbox([
                    'class' => 'form-check-input',
                    'type' => 'checkbox',
                    'role' => 'switch',
                'id' => 'flexSwitchCheckDefault'
            ])->label('Запомнить меня', [
                    'class' => 'form-check-label',
                'for' => 'flexSwitchCheckDefault'
            ]);
            ?>
            </div>
            <?php
            echo Html::submitButton('Вход', ['class' => 'btn btn-lg btn-dark w-100', 'name' => 'login-button']);
            ActiveForm::end();
            ?>
        </section>
    </article>
</div>
