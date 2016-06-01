<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'startdate') ?>

    <?= $form->field($model, 'daysofweek') ?>

    <?= $form->field($model, 'fee') ?>

    <?php // echo $form->field($model, 'classtypeid') ?>

    <?php // echo $form->field($model, 'previousclassid') ?>

    <?php // echo $form->field($model, 'nextclassid') ?>

    <?php // echo $form->field($model, 'enddate') ?>

    <?php // echo $form->field($model, 'teacherid') ?>

    <?php // echo $form->field($model, 'assistantid') ?>

    <?php // echo $form->field($model, 'studytime') ?>

    <?php // echo $form->field($model, 'finishtime') ?>

    <?php // echo $form->field($model, 'code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
