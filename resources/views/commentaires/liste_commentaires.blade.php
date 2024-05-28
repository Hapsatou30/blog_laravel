<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contenu="width=device-width, initial-scale=1.0">
    <title>Liste des commentaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/details_articles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="retour">
        <a href="/articles/liste_articles" class="btn btn-success return-button"><i class="fas fa-arrow-left"></i> Retour aux articles</a>
    </div>
    <div class="container">
        <div class="card mb-3" style="max-width: 20rem;">
            @if ($article->image)
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->nom}}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $article->nom }}</h5>
                <p class="card-text">{{ $article->description }}</p>
                <p class="card-text">Date de création : {{ $article->created_at }}</p>
                <p class="card-text">À la Une : {{ $article->la_une ? 'Oui' : 'Non' }}</p>
                
            </div>
        </div>

        <div class="titre" style="display: flex; justify-content:center; align-items:center; margin-bottom:20px; gap:30px;">
            <h2>commentaires</h2>
        <a href="/commentaires/ajouter_commentaires/{{$article->id}}" class="btn btn-success"><i class="fas fa-plus"></i> </a>
        </div>
        @if($article->commentaires->isEmpty())
            <p>Pas de commentaire pour le moment.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Auteur</th>
                        <th scope="col">Contenu</th>
                        <th scope="col">Date_creation</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($article->commentaires as $commentaire)
                        <tr>
                            <td>{{ $commentaire->auteur }}</td>
                            <td>{{ $commentaire->contenu }}</td>
                            <td>{{ $commentaire->created_at }}</td>
                            <td>
                                <a href="#" class="btn btn-info"><i class="fas fa-edit"></i> </a>
                                <a href="#" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer {{ $article->nom }} ?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
