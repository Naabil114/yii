<?php

use app\models\Anggota;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AnggotaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="anggota-index">

    <h2>DATA ANGGOTA</h2>

    <p>
        <?= Html::a('+ Tambah Data Anggota', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_anggota',
            'no_identitas',
            'nama',
            'jenis_kelamin',
            'alamat',
            //'no_hp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Anggota $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_anggota' => $model->id_anggota]);
                 }
            ],
        ],
    ]); ?>


</div>
</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>