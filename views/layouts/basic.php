<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Document</title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

	<div class="wrap">
		<div class="conteiner">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><a href="#">Home</a></li>
			  <li role="presentation"><a href="#">Profile</a></li>
			  <li role="presentation"><a href="#">Messages</a></li>
			</ul>

			<?= $content ?>
			
		</div>
	</div>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
