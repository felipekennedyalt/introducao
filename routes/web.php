<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class {
    return view('welcome');
});

Route::get('produtos/inserir', function () {
    return "Página de inserir produto";
});
//para passar um parametro opcional onde ele não obrigatoriamente está presente eu utilizo "?" no fim do parametro para indicar como opcional, e no método passo sua variável como nulo
Route::get('produtos/{nome}/{valor?}', function ($nome, $valor = null) {
    //se valor existe
    if($valor){
        return "O nome do produto é $nome e seu valor é $valor";
    }else{
        return "O nome do produto é $nome";
    }
    
});

Route::get('users', function () {
    return 'usuário';
});

