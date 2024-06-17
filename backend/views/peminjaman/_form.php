<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */
/** @var yii\widgets\ActiveForm $form */

?>
<!-- on your view layout file HEAD section -->
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin="anonymous"></script>

<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="mb-4 col-2">
        <?= $form->field($model, 'kd_pinjam')->textInput(['readonly' => true])->label('Kode Peminjaman') ?>
    </div>
        
    <div class="mb-4 col-5">
        <?= $form->field($model, 'tanggal_pinjam')->widget(DatePicker::classname(), [
        'options' => ['id'  => 'tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format'=> 'yyyy-mm-dd',
        ]
        ]);
        ?>
    </div>

    <?php 
    
    $data = (new \yii\db\Query())->select(['kd_buku'])
                                ->from('buku')
                                ->where(['status' => 'ADA'])
                                ->all();

    $anggota = (new \yii\db\Query())->select(['id_anggota'])
                                ->from('anggota')
                                ->all();

    $petugas = (new \yii\db\Query())->select(['id_petugas'])
                                ->from('petugas')
                                ->all();
    
    $buku = [];
    $kode = [];
    for($i = 0; $i < count($data); $i++){
        array_push($buku, $data[$i]['kd_buku']);
    }

    foreach($buku as $b){
        array_push($kode, [$b=>$b]);
    }

    $idAnggota = [];
    $kodeAnggota = [];
    for($i = 0; $i < count($anggota); $i++){
        array_push($idAnggota, $anggota[$i]['id_anggota']);
    }

    foreach($idAnggota as $b){
        array_push($kodeAnggota, [$b=>$b]);
    }

    $idPetugas = [];
    $kodePetugas = [];
    for($i = 0; $i < count($petugas); $i++){
        array_push($idPetugas, $petugas[$i]['id_petugas']);
    }

    foreach($idPetugas as $b){
        array_push($kodePetugas, [$b=>$b]);
    }
    
    ?>
    

    <div class="mt-3 mb-4 col-5">
    <?= $form->field($model, 'kd_buku')->widget(Select2::classname(), [
    'data' => $kode,
    'options' => ['placeholder' => 'Cari Kode Buku'],
    'pluginOptions' => [
        'allowClear' => true
    ],

    ]); ?>
    </div>


    <div class="mb-4 col-5">
    <?= $form->field($model, 'id_anggota')->widget(Select2::classname(), [
    'data' => $kodeAnggota,
    'options' => ['placeholder' => 'Cari Kode Anggota'],
    'pluginOptions' => [
        'allowClear' => true
    ],

    ]); ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'id_petugas')->widget(Select2::classname(), [
    'data' => $kodePetugas,
    'options' => ['placeholder' => 'Cari Kode Petugas'],
    'pluginOptions' => [
        'allowClear' => true
    ],

    ]); ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>