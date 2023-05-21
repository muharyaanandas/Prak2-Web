<?php

use app\models\Mahasiswa032;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa032Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tabel Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa032-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'NIM',
            'Nama',
            'Kelas',
            //'Jurusan',
            'profil032.Foto_profil',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa032 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id' => $model->Id]);
                }
            ],
        ],
    ]); ?>


</div>