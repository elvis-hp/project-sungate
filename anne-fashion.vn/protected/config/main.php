<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Anne Fashion',
	'theme'=>'bootstrap', // requires you to copy the theme under your themes directory

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'bootstrap'=>array(
	         'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
	        //'coreCss'=>true, // whether to register the Bootstrap core CSS (bootstrap.min.css), defaults to true
	        //'responsiveCss'=>false, // whether to register the Bootstrap responsive CSS (bootstrap-responsive.min.css), default to false
	        //'js'=>array('bootstrap.min.js'),
	        //'js'=>array('bootstrap-carousel.js'),
            //'css'=>array(                        // and css
             //       'css/bootstrap.min.css', 
             //       'css/bootstrap-responsive.min.css',
              //  ),
            //'depends'=>array('jquery'),    
	        'plugins'=>array(
	            // Optionally you can configure the \"global\" plugins (button, popover, tooltip and transition)
	            // To prevent a plugin from being loaded set it to false as demonstrated below
	            'transition'=>false, // disable CSS transitions
	            'tooltip'=>array(
	                'selector'=>'a.tooltip', // bind the plugin tooltip to anchor tags with the 'tooltip' class
	                'options'=>array(
	                    'placement'=>'bottom', // place the tooltips below instead
					),
	            ),
	         //.....
            // If you need help with configuring the plugins, please refer to Bootstrap's own documentation:
			// http://twitter.github.com/bootstrap/javascript.html
        ),
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
			
			   'gii'=>'gii',
	            'gii/<controller:\w+>'=>'gii/<controller>',
	            'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
			
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=anne-fashion',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);