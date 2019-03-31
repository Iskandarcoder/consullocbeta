<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
    body{
        background-color: #305f89;
    }
</style>
<br><br><br><br><br><br>
<div class="site-login text-center container">
    <img src="../images/gerb.png"><br>
    <p style="height: 17px;font-size: 25px; color: white;" alt=""/><b>Министерство Иностранных Дел РУ</b></p><br>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->input('text', ['placeholder' => "Логин"])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput()->input('password', ['placeholder' => "Пароль"])->label(false) ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary col-sm-12', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>