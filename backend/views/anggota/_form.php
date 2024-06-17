<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Anggota $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">


<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="mb-4 col-2">
    <?= $form->field($model, 'id_anggota')->textInput(['readonly' => true])->label('ID Anggota') ?>
    </div>

    <div class="mb-4 col-4">
    <?= $form->field($model, 'no_identitas')->textInput(['maxlength' => true])->label('No Identitas') ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true])->label('Nama') ?>
    </div>

    <div class="mb-4 col-4">
    <?= $form->field($model, 'jenis_kelamin')->radioList(['Laki-Laki' => 'Laki-Laki', 'Perempuan'=>'Perempuan'])->label('Jenis Kelamin', ['class'=>'mb-3']) ?>
    </div>

    <div class="mb-4 col-5">
    <?= $form->field($model, 'alamat')->textarea(['maxlength' => true])->label('Alamat') ?>
    </div>

    <div class="mb-4 col-4">
    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true])->label('No HP') ?>
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