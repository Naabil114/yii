<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Anggota $model */

$this->title = 'Create Anggota';
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">


<div class="anggota-create">

    <h2>Form Tambah Data Anggota</h2>

    <?php 
    
    $idAnggota = (new \yii\db\Query())
                ->select(['right(id_anggota, 3) AS id_anggota'])
                ->from('anggota')
                ->orderBy('id_anggota DESC')
                ->all();

    if(empty($idAnggota)){
      $kode = '001';
    }else{
      if((int)$idAnggota[0]['id_anggota']+1 < 10){
        $kode = '00'.(int)$idAnggota[0]['id_anggota']+1;
      }elseif((int)$idAnggota[0]['id_anggota']+1 >= 10 && (int)$idAnggota[0]['id_anggota']+1 < 100){
        $kode = '0'.(int)$idAnggota[0]['id_anggota']+1;
      }else{
        $kode = ''.(int)$idAnggota[0]['id_anggota']+1;
      }
    }

    $model->id_anggota = 'AN-'.$kode;
    
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