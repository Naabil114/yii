<?php

use PhpParser\Lexer\TokenEmulator\ReadonlyTokenEmulator;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="container flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="card-body">

<div class="buku-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="mb-4 col-2">
      <?= $form->field($model, 'kd_buku')->textInput(['readonly' => true])->label('Kode Buku') ?>
    </div>
  
    <div class="mb-4 col-7">
      <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
    </div>
      
    <div class="mb-4 col-5">
      <?= $form->field($model, 'sampul')->fileInput(['class' => 'form-control']) ?>
    </div>

    <div class="mb-4 col-4">
      <?= $form->field($model, 'kategori')->textInput(['maxLength' => true]) ?>
    </div>

    <div class="mb-4 col-6">
      <?= $form->field($model, 'pengarang')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="mb-4 col-6">
      <?= $form->field($model, 'penerbit')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="mb-4 col-3">
      <?= $form->field($model, 'tahun_terbit')->textInput(['maxlength' => true]) ?>
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