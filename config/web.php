<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
	    'user' => [
	    	'class' => 'dektrium\user\Module',
	    	'enableConfirmation' => false,
	    	'admins' => ['admin'],
	    	'mailer' => [
		    	'sender'                => 'marcelo.exg@gmail.com', // or ['no-reply@myhost.com' => 'Sender name']
		    	'welcomeSubject'        => 'Welcome subject',
		    	'confirmationSubject'   => 'Confirmation subject',
		    	'reconfirmationSubject' => 'Email change subject',
		    	'recoverySubject'       => 'Recovery subject',
	    	],
		]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1231231236',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
  
        //'authManager' => [
        //	'class' => 'yii\rbac\DbManager',
        //],
        //'user' => [
        //	'class' => 'app\components\User',
        //   'identityClass' => 'dektrium\user\model\User',
        //    //'enableAutoLogin' => true,
        //],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //'mailer' => [
       //     'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
        //    'useFileTransport' => false,
        //],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'view' => [
       		'theme' => [
       			'pathMap' => [
       				'@dektrium/user/views' => '@app/views/user'
        		],
        	],
        ],
        'urlManager' => [
	        //'class' => 'yii\web\UrlManager',
	        // Disable index.php
	        //'showScriptName' => false,
	        // Disable r= routes
	        'enablePrettyUrl' => true,
	       
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;