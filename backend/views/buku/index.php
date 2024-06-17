<?php

use app\models\Buku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BukuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
<div class="buku-index">

    <h2>DAFTAR BUKU</h2>

    <p>
        <?= Html::a('+ Tambah Data Buku', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'kd_buku',
            'judul',
            'kategori',
            'pengarang',
            // 'penerbit',
            // 'tahun_terbit',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Buku $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_buku' => $model->kd_buku]);
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