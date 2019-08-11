<?php $this->beginPage(); ?>
<!doctype html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yii begin</title>
    <?php $this->head(); ?>
    <style>
    	.content{

    		margin-top: 60px;
    	}
    </style>
</head>
<body>

	<?php $this->beginBody(); ?>

	<?php 
		\yii\bootstrap\navBar::begin([
			'brandLabel' => 'BEGIN',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [

				'class' => 'navbar-default navbar-fixed-top'
			]
		]);

		$items = [
			['label' => 'Join', 'url' => ['/user/join']],
			['label' => 'Login', 'url' => ['/user/login']],
		];

		echo \yii\bootstrap\Nav::widget([

			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $items,

		]);

		\yii\bootstrap\navBar::end();
	?>

    <div class="container content">
		


    	<?= $content; ?>



    		
	</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>