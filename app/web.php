<?php

	use App\Core\Route;

	$app 			= new Route;

	/** 
	* 	@var
	*  
	*	$app->add( 'Alamat web', 
	*				'Class yang ada dicontroller contoh `Ggwp\Anjay` or `Anjay`', 
	*				'Method class `index`', 
	* 				'Method request `post, get, put, delete`');
	*   @param
	*   Ketik '/:id/id2/id3' pada alamat web untuk mengirimkan parameter
	*/

	// Router
	$app->add('/', '\Role');

	$app->add('/angkatan', '\Angkatan');
	$app->add('/angkatan/insert', '\Angkatan', 'insert', 'post');
	$app->add('/angkatan/update', '\Angkatan', 'update', 'post');
	$app->add('/angkatan/delete', '\Angkatan', 'delete', 'post');

	$app->add('/role', '\Role');
	$app->add('/role/insert', '\Role', 'insert', 'post');
	$app->add('/role/update', '\Role', 'update', 'post');
	$app->add('/role/delete', '\Role', 'delete', 'post');

	$app->add('/user', '\User');
	$app->add('/user/insert', '\User', 'insert', 'post');
	$app->add('/user/update', '\User', 'update', 'post');
	$app->add('/user/delete', '\User', 'delete', 'post');

	// Auth
	$app->add('/login', '\Auth\Login');
	$app->add('/doLogin', '\Auth\Login', 'doLogin', 'post');
	$app->add('/logout', '\Auth\Login', 'logout');

	$app->run('/');
