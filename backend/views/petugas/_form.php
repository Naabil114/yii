<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Petugas $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="petugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="mb-4 col-2">
    <?= $form->field($model, 'id_petugas')->textInput(['readonly' => true])->label('ID Petugas') ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true])->label('Nama') ?>
    </div>

    <div class="mb-4 col-4">
    <?= $form->field($model, 'jabatan')->dropDownList(['' =>'--Pilih Jabatan--','Pustakawan Madya'=>'Pustakawan Madya','Pustakawan Mahir'=>'Pustakawan Mahir','Pustakawan Penyelita'=>'Pustakawan Penyelita','Pengadministrasi Perpustakaan'=>'Pengadministrasi Perpustakaan'])->label('Jabatan') ?>
    </div>

    <div class="mb-4 col-4">
    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true])->label('No HP') ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'alamat')->textarea()->label('Alamat') ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
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