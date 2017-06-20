<?php

use jlorente\remainingcharacters\RemainingCharacters;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

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
            ],
        ]
    ); ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'sell_price')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 0 => '0', 1 => '1', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
