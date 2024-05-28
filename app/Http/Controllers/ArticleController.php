<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouterArticles()
    {
        return view('/articles/ajouter_articles');
        
    }
    public function traitementAjoutArticles(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'regex:/^[a-zA-Z\s\-\'\,\.]+$/'], // Permet les lettres, espaces, tirets, apostrophes, virgules et points
            'description' => ['required'], 
            'la_une' => 'nullable|boolean',
            'image' => ['required', 'url'], 
        ], [
            'nom.regex' => 'Le champ nom ne doit contenir que des lettres, espaces, tirets, apostrophes, virgules et points.',
            'image.url' => 'Le champ image doit être une URL valide.',
        ]);
        $article = new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->la_une = $request->la_une;
        $article->image = $request->image;
        $article->save();
        return redirect('/articles/liste_articles')->with('status', 'Une article a bien été ajouté avec succès.');

    }
    public function afficherArticle()
    {
        $articles = Article::all();
        return view("/articles/liste_articles" , compact('articles'));
    }
    public function voirDetails($id)
    {
        $article = Article::find($id);
        return view("/articles/details_articles" , compact('article'));
    }
    public function modifierArticles($id)
    {
        $article = Article::find($id);
        return view("/articles/modifier_articles", compact("article"));
        
    }
    public function traitementModifier(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'regex:/^[a-zA-Z\s\-\'\,\.]+$/'], // Permet les lettres, espaces, tirets, apostrophes, virgules et points
            'description' => ['required'], 
            'la_une' => 'nullable|boolean',
            'image' => ['required', 'url'], 
        ], [
            'nom.regex' => 'Le champ nom ne doit contenir que des lettres, espaces, tirets, apostrophes, virgules et points.',
            'image.url' => 'Le champ image doit être une URL valide.',
        ]);
        $article = Article::find($request->id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->la_une = $request->la_une;
        $article->image = $request->image;
        $article->update();
        return redirect('/articles/liste_articles')->with('status', 'Une article a bien été modifié avec succès.');

    }
    public function supprimerArticles($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles/liste_articles')->with('status', 'L\'article a bien été supprimer avec succès.');
    }
}
