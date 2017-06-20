<?php

use kartik\widgets\SwitchInput;
use jlorente\remainingcharacters\RemainingCharacters;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>

    <?= $form->field($model, 'product_name')->widget(
        RemainingCharacters::classname(),
        [
            'text' => Yii::t('app', '{n} characters remaining'),
            'type' => RemainingCharacters::INPUT_TEXT,
            'options' => [
                'class' => 'form-control',
                'maxlength' => true,
            ],
        ]
    ); ?>

    <?= $form->field($model, 'description')->widget(
        RemainingCharacters::classname(),
        [
            'text' => Yii::t('app', '{n} characters remaining'),
            'type' => RemainingCharacters::INPUT_TEXTAREA,
            'options' => [
                'class' => 'form-control',
                'maxlength' => true,
                'rows' => 5,
            ],
        ]
    ); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'weight')->widget(MaskedInput::classname(), ['clientOptions' => [
                'alias' => 'decimal',
                'autoGroup' => true,
                'groupSeparator' => ',',
                'removeMaskOnSubmit' => true,
            ]]);?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'sell_price')->widget(MaskedInput::classname(), ['clientOptions' => [
                'alias' => 'decimal',
                'autoGroup' => true,
                'groupSeparator' => ',',
                'removeMaskOnSubmit' => true,
            ]]);?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'stock')->widget(MaskedInput::classname(), ['clientOptions' => [
                'alias' => 'decimal',
                'autoGroup' => true,
                'groupSeparator' => ',',
                'removeMaskOnSubmit' => true,
            ]]);?>
        </div>

        <div class="col-md-3">
            <?php if (empty($model->status)) {
                $model->status = true;
            } ?>
            <?= $form->field($model, 'status')->widget(SwitchInput::classname(), ['pluginOptions' => [
                'offText' => Yii::t('app', 'Inactive'),
                'onText' => Yii::t('app', 'Active'),
            ]]);?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
