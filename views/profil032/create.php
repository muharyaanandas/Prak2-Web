<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil032 $model */

$this->title = 'Create Profil032';
$this->params['breadcrumbs'][] = ['label' => 'Profil032s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil032-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
