<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route :: get('/mycontroller/{var1?}',[MyController::class,'myfunction']);

Route :: post('/mycontroller/{id?}',[MyController::class,'myfunction']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{id}',function ($val="") {
    return "<h1>Hello world! $val</h1>";
});
