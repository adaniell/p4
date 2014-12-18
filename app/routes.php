<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
* Index
*/
Route::get('/', 'IndexController@getIndex');


/**
* Users
* (Explicit Routing)
*/
Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );


/**
* Tasks
* (Explicit Routing)
*/
Route::get('/all', 'TaskController@getIndex');
Route::get('/create', 'TaskController@getCreate');
Route::post('/create', 'TaskController@postCreate');
Route::get('/edit/{task_id}', 'TaskController@getEdit');
Route::post('/edit/{task_id}', 'TaskController@postEdit');
Route::get('/delete/{task_id}', 'TaskController@getDelete');
Route::post('/delete/{task_id}', 'TaskController@postDelete');
Route::get('/complete', 'TaskController@getComplete');
Route::get('/incomplete', 'TaskController@getInComplete');

/**
* Comments
* (Explicit Routing)
*/
Route::get('/message_board', 'CommentController@getIndex');
Route::get('/create_comment', 'CommentController@getCreate');
Route::post('/create_comment', 'CommentController@postCreate');

use Paste\Pre;



Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

