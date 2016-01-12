<?php


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', [ 'as' => 'reset.get.email', 'uses' => 'Auth\PasswordController@postEmail' ] );

// Password reset routes...
Route::get('password/reset/{token}',	 'Auth\PasswordController@getReset');
Route::post('password/reset',[ 'as' => 'reset.success', 'uses' => 'Auth\PasswordController@postReset' ]);

Route::group(
	[
		"prefix" => "admin",
		"namespace" => "\Backend"
	],
	function(){
		Route::get( "/", [ "as" => "B.login", "uses" => "BackendLoginController@index" ] );

		Route::post( "/login", [ "as" => "B.post.login", "uses" => "BackendLoginController@handleLogin" ] );
		Route::get( "/logout", [ "as" => "B.post.logout", "uses" => "BackendLoginController@handleLogout" ] );

		Route::group(
			[
				"middleware" => "auth",
			],
			function(){
				Route::get( "/dashboard", [ "as" => "B.dashboard", "uses" => "BackendDashboardController@index" ] );

				Route::get( "/media", [ "as" => "B.media", "uses" => "BackendMediaController@index" ] );

				Route::group(
					[
						"prefix" => "user",
						"middleware" => "authAdmin",
					],
					function(){
						Route::get( "/list", [ "as" => "B.user.list", "uses" => "BackendUserController@index" ] );

						Route::get( "/profile", [ "as" => "B.user.profile", "uses" => "BackendUserController@show" ] );

						Route::get( "/edit", [ "as" => "B.user.edit", "uses" => "BackendUserController@edit" ] );

						Route::get( "/add", [ "as" => "B.user.get.add", "uses" => "BackendUserController@create" ] );

						Route::post( "/add/save", [ "as" => "B.user.post.add", "uses" => "BackendUserController@store" ]);
					}
				);				

				Route::get( "/post/list", [ "as" => "B.post.list", "uses" => "BackendPostController@index" ] );

				Route::get( "/post/detail/{post_slug}", [ "as" => "B.post.detail", "uses" => "BackendPostController@show" ] );
			}
		);
	}
);