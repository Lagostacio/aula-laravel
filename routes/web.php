<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/produtos')->middleware('auth')->group(function(){


    Route::get('', [ProdutosController::class, 'index'])->name('produtos');

    Route::post('',[ProdutosController::class, 'index']);

    Route::get('/add', [ProdutosController::class, 'add'])->name('produtos.add');

    Route::post('/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

    Route::get('/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');

    Route::get('/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

    Route::post('/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

    Route::get('/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

    Route::delete('/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');

});

Route::prefix('/usuarios')->middleware('auth')->group(function (){


    Route::get('',[UsuariosController::class, 'index'])->name('usuarios');

    Route::get('/add',[UsuariosController::class, 'add'])->name('usuarios.add');

    Route::post('/add',[UsuariosController::class, 'addSave'])->name('usuarios.addSave');

    Route::get('/delete/{usuario}',[UsuariosController::class, 'delete'])->name('usuarios.delete');

    Route::delete('/delete/{usuario}', [UsuariosController::class, 'deleteForReal'])->name('usuarios.deleteForReal');

});


Route::get('/login',[UsuariosController::class, 'login'])->name('login');

Route::post('/login',[UsuariosController::class, 'login']);

Route::get('/logout',[UsuariosController::class, 'logout'])->name('logout');

// Rotas automáticas da verificação de email
Route::get('/email/verify',function(){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}',function (EmailVerificationRequest $request){
    $request->fullfill();
    return redirect()->route('/usuarios');
})->middleware(['auth','signed'])->name('verification.verify');
