{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/ajouter_articles.css') }}" rel="stylesheet">
</head>
<body>
   <div class="container">
    <h1>MODIFIER UN ARTICLE</h1><hr>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
      </ul>
    <form action="/articles/modifier_articles/traitement" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <input type="text" name="id" style="display: none;"value ="{{$article->id}}">
        <div class="form-group">
          <label for="nom">Titre de l'article</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{$article->nom}}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" value="{{$article->description}}">
        </div>
        
        <div class="form-group">
          <label for="image">L'image</label>
          <input type="text" class="form-control" id="image" name="image" value="{{$article->image}}">
        </div>
        <div class="form-group">
          <label>À la Une</label><br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="la_une" id="la_une_oui" value="1" {{ $article->la_une ? 'checked' : '' }}>
              <label class="form-check-label" for="la_une_oui">Oui</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="la_une" id="la_une_non" value="0" {{ !$article->la_une ? 'checked' : '' }}>
              <label class="form-check-label" for="la_une_non">Non</label>
          </div>
      </div>
      
        
        <br> 
       <div class="liens">
        <button type="submit" class="btn btn-primary">MODIFIER</button>
        
        <a href="/articles/liste_articles" class="btn btn-danger">Revenir à la liste des articles</a>
       </div>
      </form>
   </div>
</body>
</html> --}}

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/ajouter_articles.css') }}" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style-starter.css">
    <link href="{{ asset('css/liste_articles.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header class="w3l-header">
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span class="fa fa-pencil-square-o"></span> Blog</a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/articles/liste_articles">Accueil</a>
                        </li>
                        <li class="nav-item @@contact__active">
                            <a class="nav-link" href="/articles/ajouter_articles">Ajouter un Article</a>
                        </li>
                    </ul>

                    <!--/search-right-->
                    <div class="search-right mt-lg-0 mt-2">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <h3 class="hny-title two">Recherer ici</h3>
                                <form action="#" method="Get" class="search-box">
                                    <input type="search" placeholder="Rechercher des articles de blog" name="search"
                                        required="required" autofocus="">
                                    <button type="submit" class="btn">Recherche</button>
                                </form>
                                <a class="close" href="#close">×</a>
                            </div>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->

                    <!-- author -->
                    <div class="header-author d-flex ml-lg-4 pl-2 mt-lg-0 mt-3">
                        <a class="img-circle img-circle-sm" href="#author">
                            <img src="https://i.pinimg.com/564x/79/42/1e/79421edd6375c1a47f98eaceff674e7f.jpg"
                                class="img-fluid" alt="Profil">
                        </a>
                        <div class="align-self ml-3">
                            <a href="#author">
                                <h5>Hapsatou</h5>
                            </a>
                            <span>Rédactrice de blog</span>
                        </div>
                    </div>
                    <!-- // author-->
                </div>

                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </div>
        </nav>
        <!--//nav-->
    </header>
    <!-- //header -->
    <div class="container">
        <h1>MODIFIER UN ARTICLE</h1>
        <hr>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <form action="/articles/modifier_articles/traitement" method="post" class="form-group"
            enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" style="display: none;"value="{{ $article->id }}">
            <div class="form-group">
                <label for="nom">Titre de l'article</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $article->nom }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $article->description }}">
            </div>

            <div class="form-group">
                <label for="image">L'image</label>
                <input type="text" class="form-control" id="image" name="image"
                    value="{{ $article->image }}">
            </div>
            <div class="form-group">
                <label>À la Une</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="la_une" id="la_une_oui" value="1"
                        {{ $article->la_une ? 'checked' : '' }}>
                    <label class="form-check-label" for="la_une_oui">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="la_une" id="la_une_non" value="0"
                        {{ !$article->la_une ? 'checked' : '' }}>
                    <label class="form-check-label" for="la_une_non">Non</label>
                </div>
            </div>


            <br>
            <div class="liens">
                <button type="submit" class="btn btn-primary">MODIFIER</button>

                <a href="/articles/liste_articles" class="btn btn-danger">Revenir à la liste des articles</a>
            </div>
        </form>
    </div>
    <!-- footer -->
    <footer class="w3l-footer-16">
        <div class="footer-content py-lg-5 py-4 text-center">
            <div class="container">
                <div class="copy-right">
                    <h6>© 2024 Blog . Made with <span class="fa fa-heart" aria-hidden="true"></span>, Designed by
                        <a href="https://w3layouts.com">Hapsatou</a>
                    </h6>
                </div>
                <ul class="author-icons mt-4">
                    <li><a class="facebook" href="#url"><span class="fa fa-facebook"
                                aria-hidden="true"></span></a>
                    </li>
                    <li><a class="twitter" href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    </li>
                    <li><a class="google" href="#url"><span class="fa fa-google-plus"
                                aria-hidden="true"></span></a>
                    </li>
                    <li><a class="linkedin" href="#url"><span class="fa fa-linkedin"
                                aria-hidden="true"></span></a></li>
                    <li><a class="github" href="#url"><span class="fa fa-github" aria-hidden="true"></span></a>
                    </li>
                    <li><a class="dribbble" href="#url"><span class="fa fa-dribbble"
                                aria-hidden="true"></span></a></li>
                </ul>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-up"></span>
                </button>
            </div>
        </div>

        <!-- move top -->
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
    </footer>
    <!-- //footer -->

    <!-- Template JavaScript -->
    <script src="/assets/js/theme-change.js"></script>

    <script src="/assets/js/jquery-3.3.1.min.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>
