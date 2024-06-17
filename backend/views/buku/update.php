<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */

$this->title = 'Update Buku';
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_buku, 'url' => ['view', 'kd_buku' => $model->kd_buku]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="buku-update">

    <h2><?= 'Form Edit Data Buku ('.$model->kd_buku.')'?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>