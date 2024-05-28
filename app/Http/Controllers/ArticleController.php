<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouter_articles()
    {
        return view('/articles/ajouter_articles');
        
    }
    public function traitement_ajout_articles(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'regex:/^[a-zA-Z\s\-\'\,\.]+$/'], // Permet les lettres, espaces, tirets, apostrophes, virgules et points
            'description' => ['required'], 
            'date_creation' => 'required',
            'la_une' => 'nullable|boolean',
            'image' => ['required', 'url'], 
        ], [
            'nom.regex' => 'Le champ nom ne doit contenir que des lettres, espaces, tirets, apostrophes, virgules et points.',
            'image.url' => 'Le champ image doit être une URL valide.',
        ]);
        $article = new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->date_creation = $request->date_creation;
        $article->la_une = $request->la_une;
        $article->image = $request->image;
        $article->save();
        return redirect('/articles/ajouter_articles')->with('status', 'Une article a bien été ajouté avec succès.');

    }
}
