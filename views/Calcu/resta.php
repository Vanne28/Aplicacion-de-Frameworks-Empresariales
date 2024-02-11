<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
if (isset($respuesta)) {
    echo Html::tag('div', Html::encode($respuesta), ['class' => 'alert alert-warning']);
}
?>

<div class="row">
    <div class="container">
        <?php $formulario = ActiveForm::begin(); ?>

        <?= $formulario->field($model, 'num1') ?>
        <?= $formulario->field($model, 'num2') ?>
        <?= $formulario->field($model, 'opcion')->radioList([
            "+"=>"Suma",
            "-"=>"Resta",
            "*"=>"Multiplicacion",
            "/"=>"Division"
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Aceptar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>