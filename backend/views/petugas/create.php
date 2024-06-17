<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Petugas $model */

$this->title = 'Create Petugas';
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">
<div class="petugas-create">

<?php 
    
    $idPetugas = (new \yii\db\Query())
                ->select(['right(id_petugas, 3) AS id_petugas'])
                ->from('petugas')
                ->orderBy('id_petugas DESC')
                ->all();

    if(empty($idPetugas)){
      $kode = '001';
    }else{
      if((int)$idPetugas[0]['id_petugas']+1 < 10){
        $kode = '00'.(int)$idPetugas[0]['id_petugas']+1;
      }elseif((int)$idPetugas[0]['id_petugas']+1 >= 10 && (int)$idPetugas[0]['id_petugas']+1 < 100){
        $kode = '0'.(int)$idPetugas[0]['id_petugas']+1;
      }else{
        $kode = ''.(int)$idPetugas[0]['id_petugas']+1;
      }
    }

    $model->id_petugas = 'PE-'.$kode;
    
    ?>

    <h2>Form Tambah Data Petugas</h2>

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