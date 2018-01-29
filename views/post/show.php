<h1>Show Action</h1>

<?php // $this->registerJsFile('@web/js/script.js',['depends' => 'yii\web\YiiAsset']) ?> 


<?php $this->registerJs( " $('.conteiner').append('<p>SHOW !!!!</p>'); ", \yii\web\View::POS_LOAD) ?>