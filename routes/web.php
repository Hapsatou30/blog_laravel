<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/articles/ajouter_articles", [ArticleController::class, "ajouterArticles"]);
Route::post("/articles/ajouter_articles/traitement", [ArticleController::class, "traitementAjoutArticles"]);
Route::get("/articles/liste_articles", [ArticleController::class, "afficherArticle"]);
