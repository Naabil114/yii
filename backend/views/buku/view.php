<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */

$this->title = $model->kd_buku;
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="buku-view">
    <h2><?= Html::encode($this->title) ?></h2>

    <div class="container d-flex w-full justify-content-center">
      <img src="uploads/<?= $model->sampul?>" alt="Sampul" class="mb-3" style="width: 15vw;">
    </div>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_buku',
            'judul',
            'kategori',
            'pengarang',
            'penerbit',
            'tahun_terbit',
            'status',
        ],
    ]) ?>

    <d class="container mt-3 w-full d-flex justify-content-end">

      <p>
        <?= Html::a('Update', ['update', 'kd_buku' => $model->kd_buku], ['class' => 'btn btn-primary']) ?>
      <?= Html::a('Delete', ['delete', 'kd_buku' => $model->kd_buku], [
        'class' => 'btn btn-danger',
        'data' => [
          'confirm' => 'Are you sure you want to delete this item?',
          'method' => 'post',
          ],
          ]) ?>
      </p>
    </div>

</div>
</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>