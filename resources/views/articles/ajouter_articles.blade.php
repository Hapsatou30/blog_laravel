<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/ajouter_articles.css') }}" rel="stylesheet">
</head>
<body>
   <div class="container">
    <h1>AJOUTER UN ARTICLE</h1><hr>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
    <ul>
        @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
      </ul>
    <form action="/articles/ajouter_articles/traitement" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nom">Titre de l'article</label>
          <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="form-group">
          <label for="image">L'image</label>
          <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
          <label for="date_creation">Date de création</label>
          <input type="date" class="form-control" id="date_creation" name="date_creation">
        </div>
        <div class="form-group">
            <label>À la Une</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="la_une" id="la_une_oui" value="1">
                <label class="form-check-label" for="la_une_oui">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="la_une" id="la_une_non" value="0" checked>
                <label class="form-check-label" for="la_une_non">Non</label>
            </div>
        </div>
        
       
        <br> 
        <div class="liens">
          <button type="submit" class="btn btn-primary">AJOUTER</button>
        <a href="/items" class="btn btn-danger">Revenir à la liste des articles</a>
        </div>
      </form>
   </div>
</body>
</html>