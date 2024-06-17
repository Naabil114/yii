<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\models\Pengembalian $model */
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

<div class="pengembalian-form">
    <?php 
      $dataPinjam = (new \yii\db\Query())->select(['*'])
                                  ->from('peminjaman')
                                  ->all();

      $pinjam = [];
      $kodePinjam = [];

      for($i = 0; $i < count($dataPinjam); $i++){
          array_push($pinjam, $dataPinjam[$i]['kd_pinjam']);
      }

      foreach($pinjam as $b){
          array_push($kodePinjam, [$b=>$b]);
      }

      $dataPetugas = (new \yii\db\Query())->select(['id_petugas'])
                                  ->from('petugas')
                                  ->all();

      $petugas = [];
      $kodePetugas = [];

      for($i = 0; $i < count($dataPetugas); $i++){
          array_push($petugas, $dataPetugas[$i]['id_petugas']);
      }

      foreach($petugas as $b){
          array_push($kodePetugas, [$b=>$b]);
      }
    ?>


    <?php $form = ActiveForm::begin(); ?>

    <div class="mb-4 col-2">
    <?= $form->field($model, 'kd_pengembalian')->textInput(['readonly' => true])->label('Kode Pengembalian') ?>
    </div>

    <div class="mb-4 col-5">

        <?= $form->field($model, 'tanggal_kembali')->widget(DatePicker::classname(), [
            'options' => ['id' => 'tanggal'],
            'pluginOptions' => [
                'autoclose' => true,
                'format'=> 'yyyy-mm-dd',
                ]
                ]);
        ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'kd_pinjam')->widget(Select2::classname(), [
    'data' => $kodePinjam,
    'options' => ['placeholder' => 'Cari Kode Peminjaman', 'id' => 'kode_pinjam'],
    'pluginOptions' => [
        'allowClear' => true
    ],

    ])->label('Kode Peminjaman'); ?>
    </div>

    <div class="mb-4 col-4">
    <?= $form->field($model, 'denda')->textInput(['readonly' => true, 'id' => 'denda'])->label('Denda') ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'kd_buku')->textInput(['readonly' => true, 'id' => 'kode_buku'])->label('Kode Buku') ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'id_anggota')->textInput(['readonly' => true, 'id' => 'id_anggota'])->label('ID Anggota') ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'id_petugas')->widget(Select2::classname(), [
    'data' => $kodePetugas,
    'options' => ['placeholder' => 'Cari ID Petugas'],
    'pluginOptions' => [
        'allowClear' => true
    ],

    ])->label('ID Petugas'); ?>
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
<script>
  let harini;

  window.onload = (function loadDate() {
      let date = new Date(),
        day = date.getDate(),
        month = date.getMonth() + 1,
        year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    const todayDate = `${year}-${month}-${day}`;
    harini = todayDate;
  })();

  document.getElementById('kode_pinjam').onchange = function(){
    let kodePinjam = document.getElementById('kode_pinjam').value;
    let dataPinjam = [];
    dataPinjam = <?= json_encode($dataPinjam);?>;
    dataPinjam.forEach(konversi);
  
    function konversi(item){
      if(item.kd_pinjam == kodePinjam){
        document.getElementById('kode_buku').value = item.kd_buku;
        document.getElementById('id_anggota').value = item.id_anggota;

        let tanggalPinjam = new Date(item.tanggal_pinjam);
        let tanggalKembali = new Date(harini);

        let selisihWaktu =
            tanggalKembali.getTime() - tanggalPinjam.getTime();

        let selisihHari = Math.round(selisihWaktu / (1000 * 3600 * 24));

        if(selisihHari <= 7){
          document.getElementById('denda').value = 0;
        }else{
          let denda = (selisihHari - 7) * 10000
          document.getElementById('denda').value = denda;
        }
        
      }
    }
  }
</script>