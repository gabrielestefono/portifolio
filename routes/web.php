<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/", [\App\Http\Controllers\indexController::class, 'index'])->name("site.index");
Route::get("/login", [\App\Http\Controllers\LoginController::class, 'login'])->name("site.login");
Route::post("/login", [\App\Http\Controllers\LoginController::class, 'login'])->name("site.login");
Route::get("/register", [\App\Http\Controllers\registerController::class, 'registro'])->name("site.registro");

Route::prefix("/admin")->group(function(){
    Route::get("/sobre-mim", function(){return "Sobre Mim";})->name("site.sobre");
    Route::get("/projetos", function(){return "Projetos";})->name("site.projetos");
    Route::get("/habilidades", function(){return "Habilidades";})->name("site.habilidades");
    Route::get("/contato", function(){return "Contatos";})->name("site.contatos");
    Route::get("/mensagens", function(){return "Mensagens";})->name("site.mensagens");
});

Route::prefix("/app")->group(function(){
    Route::get("/projects", function(){return "Sobre Mim";})->name("site.projects");
    Route::post("/projeto", function(){return "Projeto";});
});

Route::fallback(function(){
    return "<p> A página que está tentando acessar não existe!</p><p><a href=".route('site.index')."> Clique aqui </a> para voltar</p>";
});