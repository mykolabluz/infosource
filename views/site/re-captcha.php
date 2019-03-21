<?php
use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
?>

<?php $form = ActiveForm::begin([
    'id' => 'giphy-form',
    //'enableAjaxValidation' => true,
    //'enableClientValidation' => false,
]); ?>
<?= $form->field($model, 'reCaptcha')->widget(ReCaptcha::class) ?>

<?= Html::submitButton('Продолжить', ['class' => 'btn btn-success']) ?>

<?= Html::a('Закрыть', ['#'], ['data-dismiss' => 'modal', 'class' => 'btn btn-danger'])?>
<?php ActiveForm::end(); ?>