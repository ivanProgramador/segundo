<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home',[Teste::class,'index']);
Route::get('/contatos',[Teste::class,'contatos']);
Route::get('/servicos',[Teste::class,'servicos']);