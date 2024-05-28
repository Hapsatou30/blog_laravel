<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/articles/ajouter_articles", [ArticleController::class, "ajouter_articles"]);
Route::post("/articles/ajouter_articles/traitement", [ArticleController::class, "traitement_ajout_articles"]);
