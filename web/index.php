<?php
	
	print_r($_REQUEST);

    define('YII_DEBUG', true);
		require __DIR__ . '/../vendor/autoload.php';
		require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
        $config = require __DIR__ . '/../config/web.php';

// echo '<br><br><br><br><br><br><br><pre>'	;
// print_r($config); 
// 	echo '</pre>';

		$yii = new yii\web\Application($config);
		$yii->run();

