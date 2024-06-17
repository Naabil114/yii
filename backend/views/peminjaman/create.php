<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */

$this->title = 'Transaksi Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="peminjaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php 
    
    $kdPinjam = (new \yii\db\Query())
                ->select(['right(kd_pinjam, 3) AS kd_pinjam'])
                ->from('peminjaman')
                ->orderBy('kd_pinjam DESC')
                ->all();

    if(empty($kdPinjam)){
      $kode = '001';
    }else{
      if((int)$kdPinjam[0]['kd_pinjam']+1 < 10){
        $kode = '00'.(int)$kdPinjam[0]['kd_pinjam']+1;
      }elseif((int)$kdPinjam[0]['kd_pinjam']+1 >= 10 && (int)$kdPinjam[0]['kd_pinjam']+1 < 100){
        $kode = '0'.(int)$kdPinjam[0]['kd_pinjam']+1;
      }else{
        $kode = ''.(int)$kdPinjam[0]['kd_pinjam']+1;
      }
    }

    $model->kd_pinjam = 'PI-'.$kode;
    
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