<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Anggota $model */

$this->title = 'Update Anggota';
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_anggota, 'url' => ['view', 'id_anggota' => $model->id_anggota]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="anggota-update">

    <h2><?= 'Form Edit Data Anggota ' . $model->id_anggota ?></h2>

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