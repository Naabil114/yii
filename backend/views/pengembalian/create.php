<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pengembalian $model */

$this->title = 'Transaksi Pengembalian';
$this->params['breadcrumbs'][] = ['label' => 'Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="pengembalian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php 
    
    $kdPengembalian = (new \yii\db\Query())
                ->select(['right(kd_pengembalian, 3) AS kd_pengembalian'])
                ->from('pengembalian')
                ->orderBy('kd_pengembalian DESC')
                ->all();

    if(empty($kdPengembalian)){
      $kode = '001';
    }else{
      if((int)$kdPengembalian[0]['kd_pengembalian']+1 < 10){
        $kode = '00'.(int)$kdPengembalian[0]['kd_pengembalian']+1;
      }elseif((int)$kdPengembalian[0]['kd_pengembalian']+1 >= 10 && (int)$kdPengembalian[0]['kd_pengembalian']+1 < 100){
        $kode = '0'.(int)$kdPengembalian[0]['kd_pengembalian']+1;
      }else{
        $kode = ''.(int)$kdPengembalian[0]['kd_pengembalian']+1;
      }
    }

    $model->kd_pengembalian = 'PE-'.$kode;
    
    ?>

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