<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/articles/ajouter_articles", [ArticleController::class, "ajouterArticles"]);
Route::post("/articles/ajouter_articles/traitement", [ArticleController::class, "traitementAjoutArticles"]);
Route::get("/articles/liste_articles", [ArticleController::class, "afficherArticle"]);
Route::get("/articles/details_articles/{id}", [ArticleController::class, "voirDetails"]);
Route::get("/articles/modifier_articles/{id}", [ArticleController::class, "modifierArticles"]);
Route::post("/articles/modifier_articles/traitement", [ArticleController::class, "traitementModifier"]);