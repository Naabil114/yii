<?php

use app\models\Pengembalian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PengembalianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'PENGEMBALIAN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="pengembalian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('+ Tambah Data Pengembalian', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pengembalian',
            'tanggal_kembali',
            'denda',
            'kd_pinjam',
            'kd_buku',
            //'id_anggota',
            //'id_petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pengembalian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pengembalian' => $model->kd_pengembalian]);
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