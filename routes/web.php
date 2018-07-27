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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');

/**
 * Backglog
 */
Route::get('/backglog', 'BackglogController@index');

/**
 * Projects
 */

Route::get('/projects','ProjectController@index');

Route::get('/projects/create','ProjectController@create');
Route::post('/projects/create','ProjectController@store');

/**
 * Stories
 */

Route::get('/stories/create','StoriesController@create');
Route::post('/stories/create','StoriesController@store');
Route::post('/stories/update/{id}','StoriesController@update');
Route::get('/story/{id}', 'StoriesController@get');
Route::get('/story/ajax/{id}', 'StoriesController@getAjax');
Route::post('/story/{id}','StoriesController@updateWeb');
Route::post('/story/{id}/delete', 'StoriesController@delete');
/**
 * Settings
 */
Route::get('/settings','SettingsController@index');
Route::get('/settings/storyStates/create','SettingsController@storyStatesCreate');
Route::post('/settings/storyStates/create','SettingsController@storyStatesStore');

Route::get('/settings/storyStates/{id}','SettingsController@storyStatesEdit');
Route::post('/settings/storyStates/{id}','SettingsController@storyStatesUpdates');
Route::post('/settings/storyStates/delete/{id}','SettingsController@storyStatesDelete');

/**
 * Sprints
 */

Route::get('/sprints','SprintsController@index');
Route::get('/sprints/create', 'SprintsController@create');
Route::post('/sprints/create','SprintsController@store');
Route::get('/sprints/{id}','SprintsController@edit');
Route::post('/sprints/update/{id}','SprintsController@update');
Route::post('/sprints/delete/{id}','SprintsController@delete');
Route::post('/sprint/active', 'SprintsController@makeActive');


