<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un commentaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/ajouter_articles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">

        <h3>Ajouter un commentaire commentaire</h3>
        <form action="/commentaires/modifier_commentaires/traitement/{{$commentaire->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="auteur">Auteur:</label>
                <input type="text" class="form-control" id="auteur" name="auteur" value="{{$commentaire->auteur}}">
            </div>
            <div class="form-group">
                <label for="contenu">Commentaire:</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="3">{{$commentaire->contenu}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier commentaire</button>
        </form>        
    </div>
</body>
</html>