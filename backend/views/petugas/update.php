<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Petugas $model */

$this->title = 'Update Petugas';
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_petugas, 'url' => ['view', 'id_petugas' => $model->id_petugas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
<div class="petugas-update">

    <h2><?= 'Form Edit Data Petugas ' . $model->id_petugas; ?></h2>

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
