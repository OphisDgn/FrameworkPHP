<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Skill;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/userlist', 'UsersController@liste')->name('usersList');
Route::get('/userlist/ed', 'UsersController@editliste')->name('userEd');
Route::get('/userlist/edit', function() {
  $user = User::all();
  return view('edituser', compact('user'));
})->name('userEdit');
Route::post('/userlist/edit', 'UsersController@editliste');


Route::get('/skills', 'SkillsController@index')->name('skillslist');
Route::get('/skills/ad', 'SkillsController@add')->name('skillsAd');
Route::get('/skills/add', function() {
    $skills = Skill::all();
    return view('add', compact('skills'));
})->name('skillsAdd');
Route::post('/skills/add', 'SkillsController@add');

Route::get('/skills/ed', 'SkillsController@edit')->name('skillsEd');
Route::get('/skills/edit', function() {
  $skills = Skill::all();
  return view('edit', compact('skills'));
})->name('skillsEdit');
Route::post('/skills/edit', 'SkillsController@edit');

Route::get('/skills/{id}/delete', 'SkillsController@delet')->name('destroy');


Route::get('/users/ad', 'UsersController@add')->name('add');
Route::get('/users/add', function() {
    $user = Auth::user();
    $ski = $user->skills;
    $skis = Skill::all();
    return view('addskill', compact('user', 'ski', 'skis'));
})->name('adding');
Route::post('/users/add', 'UsersController@add');

Route::get('/users/ed', 'UsersController@edit')->name('ed');
Route::get('/users/edit', function() {
    $user = Auth::user();
    $ski = $user->skills;
    $skis = Skill::all();
    return view('editskill', compact('user', 'ski', 'skis'));
})->name('edit');
Route::post('/users/edit', 'UsersController@edit');

Route::get('/users/{id}/delete', 'UsersController@delet')->name('delete');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/home', 'HomeController@index')->name('home');
