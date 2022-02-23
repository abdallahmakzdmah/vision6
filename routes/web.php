<?php 

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
    return 'Hompage';
});
Route::get('/Abut ', function(){
    return 'Abut page';
});
Route::get('/con tact', function(){
    return 'con tact';
});
