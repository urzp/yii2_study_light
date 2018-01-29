<h1>Show Action</h1>

<?php // $this->registerJsFile('@web/js/script.js',['depends' => 'yii\web\YiiAsset']) ?> 


<?php // $this->registerJs( " $('.conteiner').append('<p>SHOW !!!!</p>'); ", \yii\web\View::POS_LOAD) ?>

<?php  //$this->registerCss('.conteiner{ background: #ccc; }') ?>

<button class="btn btn-success" id='btn'>Click me</button>

<?php 

$js = <<< JS
		$('#btn').on('click', function(){ 
			$.ajax({
				url: 'index.php?r=post/index',
				data: {test: '123'},
				type: 'GET',
				success: function(res){
					console.log(res);
				},
				error:function(){
					alert('ERROR!');
				}
			});
			
		 });
JS;

	$this->registerJs($js);

 ?>

