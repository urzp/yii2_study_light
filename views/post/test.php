<?php 
	use yii\widgets\ActiveForm;
	use yii\helpers\Html;
 ?>


<h1>Test</h1>

<?php 

// \app\controllers\debug(Yii::$app);
// debug(Yii::$app);




// debug($model);

?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'text') ?>

<?php ActiveForm::end() ?>