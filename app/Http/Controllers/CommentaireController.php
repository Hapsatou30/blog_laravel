<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
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


    public function ajouterCommentaires($articleId)
    {
        $article = Article::find($articleId);
        return view('commentaires.ajouter_commentaires', compact('article'));
    }

    public function traitementAjoutCommentaires(Request $request, $articleId)
    {
        $request->validate([
            'auteur' => ['required', 'regex:/^[a-zA-Z\s\-\'\,\.]+$/'], // Permet les lettres, espaces, tirets, apostrophes, virgules et points
            'contenu' => ['required'], 
        ]);
    
        $article = Article::find($articleId);
    
        $commentaire = new Commentaire();
        $commentaire->auteur = $request->auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->article_id = $articleId; // Assurez-vous que l'article_id est correctement assigné
        $commentaire->save();
    
        return redirect('/commentaires/liste_commentaires/' . $articleId)->with('status', 'Un commentaire a bien été ajouté avec succès.');
    }

    public function modifierCommentaires($id)
    {
        $commentaire = Commentaire::find($id);
        return view('commentaires.modifier_commentaires', compact('commentaire'));
    }

    public function traitementModifier(Request $request, $id)
    {
        $request->validate([
            'auteur' => ['required', 'regex:/^[a-zA-Z\s\-\'\,\.]+$/'], // Permet les lettres, espaces, tirets, apostrophes, virgules et points
            'contenu' => ['required'], 
        ]);
    
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->auteur = $request->auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->save();
    
        return redirect('/commentaires/liste_commentaires/' . $commentaire->article_id)->with('status', 'Le commentaire a été modifié avec succès.');
    }
    
    public function supprimerCommentaires($id)
    {
        $commentaire = Commentaire::find($id);
        $articleId = $commentaire->article_id; // Récupérer l'ID de l'article associé au commentaire
        $commentaire->delete();
        return redirect('/commentaires/liste_commentaires/' . $articleId)->with('status', 'Le commentaire a été supprimé avec succès.');
    }

}

