<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Profil032 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profil032-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_mahasiswa')->textInput() ?>

    <?= $form->field($model, 'Foto_profil')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
