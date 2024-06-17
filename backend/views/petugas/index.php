<?php

use app\models\Petugas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PetugasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Daftar Petugas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
<div class="petugas-index">

    <h2>DATA PETUGAS</h2>

    <p>
        <?= Html::a('+ Tambah Data Petugas', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_petugas',
            'nama',
            'jabatan',
            'no_hp',
            'alamat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Petugas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_petugas' => $model->id_petugas]);
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