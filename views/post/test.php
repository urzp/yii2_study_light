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

<?php $form = ActiveForm::begin(['options'=> [ 'id' => 'testForm']]) ?>

<?= $form->field($model, 'name') -> Label('Имя') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text') -> label('Текст сообщения')->textarea(['rows'=> 10]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end() ?>