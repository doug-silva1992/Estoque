<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/outra', function()
{
    return '<h1>Outra lógica com Laravel</h1>';
});

Route::get('/Naruto', function()
{
    return 'Testa';
});