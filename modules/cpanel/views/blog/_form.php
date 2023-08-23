<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\editors\Summernote;

/** @var yii\web\View $this */
/** @var app\modules\cpanel\models\Post $model */
/** @var yii\widgets\ActiveForm $form */

//Yii::$app->params['bsVersion'] = 5;
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anons')->textarea(['rows' => 6]) ?>

<!--    --><?php //= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    <?php echo $form->field($model, 'text')->widget(Summernote::class, [
    'useKrajeePresets' => true,
    // other widget settings
    ]); ?>
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
