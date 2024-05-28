<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function afficherCommentaires($id)
    {
        // Récupérer l'article par son identifiant et charger ses commentaires
        $article = Article::with('commentaires')->find($id);
        
        // Passer l'article avec ses commentaires à la vue
        return view('commentaires.liste_commentaires', compact('article'));
    }
}

