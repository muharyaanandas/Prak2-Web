<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa032 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa032-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jurusan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
