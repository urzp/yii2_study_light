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
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

	<div class="wrap">
		<div class="conteiner">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active"><?= Html::a('Главная страница', '/web/') ?></li>
			  <li role="presentation"><?= Html::a('Cтатьии', ['post/index']) ?></li>
			  <li role="presentation"><?= Html::a('Статьия', ['post/show']) ?></li>
			</ul>

			<?= $content ?>
			
		</div>
	</div>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
