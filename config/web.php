<?php


return [
    'id' => 'begin',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => [
    	'debug', 
    	'log'
    ],
    'components' => [
    	'urlManager' => [
    		'enablePrettyUrl' => true, 
    		'showScriptName' => false
    	],
    	'request' => [ 
    		'cookieValidationKey' => '123456'
    	]

    ],
    'modules' => [

    	'debug' => [
	        'class' => 'yii\debug\Module',
	        'allowedIPs' => ['*']
	    ],

		'log' => [
		    'traceLevel' =>  3 ,
		    'targets' => [
		        [
		            'class' => 'yii\log\FileTarget',
		            'levels' => ['error', 'warning'],
		        ],
		    ],
		],

	]
];
