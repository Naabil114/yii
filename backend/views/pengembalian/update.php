<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pengembalian $model */

$this->title = 'Update Pengembalian: ' . $model->kd_pengembalian;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pengembalian, 'url' => ['view', 'kd_pengembalian' => $model->kd_pengembalian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="pengembalian-update">

    <h1><?= Html::encode($this->title) ?></h1>

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