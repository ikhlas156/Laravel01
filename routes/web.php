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
route::get('/', 'PageController@home');
route::get('/about', 'PageController@about');
route::get('/contact', 'PageController@contact');
route::get('/welcome', 'PageController@welcome');
route::get('/projects', 'PageController@projects');
 

