<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */

$this->title = 'Create Buku';
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
<div class="buku-create">

    <h2>Form Tambah Data Buku</h2>
    
    <?php 
    
    $kodeBuku = (new \yii\db\Query())
                ->select(['right(kd_buku, 3) AS kd_buku'])
                ->from('buku')
                ->orderBy('kd_buku DESC')
                ->all();

    if(empty($kodeBuku)){
      $kode = '001';
    }else{
      if((int)$kodeBuku[0]['kd_buku']+1 < 10){
        $kode = '00'.(int)$kodeBuku[0]['kd_buku']+1;
      }elseif((int)$kodeBuku[0]['kd_buku']+1 >= 10 && (int)$kodeBuku[0]['kd_buku']+1 < 100){
        $kode = '0'.(int)$kodeBuku[0]['kd_buku']+1;
      }else{
        $kode = ''.(int)$kodeBuku[0]['kd_buku']+1;
      }
    }

    $model->kd_buku = 'BK-'.$kode;
    
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