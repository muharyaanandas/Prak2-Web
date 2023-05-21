<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil032 $model */

$this->title = 'Update Profil032: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Profil032s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'Id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil032-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
