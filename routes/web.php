<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//les routes pour les articles
Route::get("/articles/ajouter_articles", [ArticleController::class, "ajouterArticles"]);
Route::post("/articles/ajouter_articles/traitement", [ArticleController::class, "traitementAjoutArticles"]);
Route::get("/articles/liste_articles", [ArticleController::class, "afficherArticle"]);
Route::get("/articles/details_articles/{id}", [ArticleController::class, "voirDetails"]);
Route::get("/articles/modifier_articles/{id}", [ArticleController::class, "modifierArticles"]);
Route::post("/articles/modifier_articles/traitement", [ArticleController::class, "traitementModifier"]);
Route::get("/articles/supprimer/{id}", [ArticleController::class, "supprimerArticles"]);


//les routes pour les commentaires
Route::get('/commentaires/liste_commentaires/{article}', [CommentaireController::class, 'afficherCommentaires']);
Route::get("/commentaires/ajouter_commentaires/{article}", [CommentaireController::class, "ajouterCommentaires"]);
Route::post("/commentaires/ajouter_commentaires/traitement/{article}", [CommentaireController::class, "traitementAjoutCommentaires"]);
Route::get("/commentaires/supprimer/{article}", [CommentaireController::class, "supprimerCommentaires"]);
