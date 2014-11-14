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

//Route::get('/', 'PagesController@home');
//Route::get('about', 'PagesController@about');
//Route::get('users', function () {
//    $users = User::all();
//    $user = User::find(1);
//
//    return $user->username;
//});

//Route::get('/', function () {
//    $users = User::where('username', '!=', 'luzma')->get();
//    $user = new User;
//    $user->username = "NewUser";
//    $user->password = Hash::make("pass");
//    $user->save();

//    User::create([
//        'username' => 'user',
//        'email' => 'luzma_87@yahoo.com',
//        'password' => Hash::make('1234')
//    ]);
//
//    return 'Done';

//    $user = User::find(2);
//    $user->username = 'Updated';
//    $user->save();

//    $user = User::find(4);
//    $user->delete();

//    $users = User::all();
//    $users = User::find(1);
//    $users = User::orderBy('username', 'desc')->get();
//    $users = User::orderBy('username', 'desc')->take(2)->get();
//    return $users;
//});

//Route::get('users', function () {
//    $users = User::all();
////    return View::make('users/index')->with('users', $users);
////    return View::make('users/index11')->withUsers($users);
////    return View::make('users/index', ['users' => $users]);
//    return View::make('users.index', ['users' => $users]);
//});

//Route::get('users/{username}', function ($username) {
//    $user = User::whereUsername($username)->first();
//    return View::make('users.show', ['user' => $user]);
//});

//Route::get('users', 'UsersController@index');
//Route::get('users/{username}', 'UsersController@show');

//Route::get('/', 'SessionsController@create');

Route::get('/', function () {
    return View::make('enConstruccion');
});

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

Route::resource('users', 'UsersController');

Route::resource('paginas', 'PaginasController');
Route::post('paginas/validarNombre', 'PaginasController@validarNombre');

Route::get('admin', function () {
    return 'Admin page';
})->before('auth');

//Route::resource('users.questions', 'QuestionsController');
//Route::resource('questions', 'QuestionsController');