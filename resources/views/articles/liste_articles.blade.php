<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BLOG</title>

    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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
                    <span class="fa fa-pencil-square-o"></span>  Blog</a>
               
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
                            <img src="https://i.pinimg.com/564x/79/42/1e/79421edd6375c1a47f98eaceff674e7f.jpg" class="img-fluid" alt="Profil">
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
       <h1>Les articles à la Une</h1>
       <div class="row">
        @foreach ($articlesLaUne as $key => $article)
            @if($key % 3 == 0)
                </div><div class="row">
            @endif
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="/articles/details_articles/{{ $article->id }}">
                            <img class="card-img-bottom d-block radius-image" src="{{ $article->image }}" alt="{{ $article->nom }}">
                        </a>
                    </div>
                    <div class="card-body p-0 blog-details">
                        <a href="/articles/details_articles/{{ $article->id }}" class="blog-desc">{{ $article->nom }}</a>
                        <p style="color: black">{{ Str::limit($article->description, 150) }}</p>
                      
                        <ul class="blog-meta">
                            <li class="meta-item blog-lesson">
                                <span class="meta-value">{{ $article->created_at->format('F d, Y') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>    
    
       <!-- Articles tendances -->
       <h2>Les Anciens Articles</h2>
       <div class="grids5-info ">
        @foreach ($articlesNonLaUne as $key => $article)
            <h4>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}.</h4>
            <div class="blog-info">
                <a href="/articles/details_articles/{{$article->id}}" class="blog-desc1">{{ $article->nom }}</a>
                <div class="author align-items-center mt-2 mb-1">
                    <p >{{ Str::limit($article->description, 150) }}</p>
                <ul class="blog-meta">
                    <li class="meta-item blog-lesson">
                        <span class="meta-value">{{ $article->created_at->format('F d, Y') }}</span>
                    </li>
                   
                </ul>
            </div>
        @endforeach
    </div>
    
   </div>

    <!-- footer -->
    <footer class="w3l-footer-16">
        <div class="footer-content py-lg-5 py-4 text-center">
            <div class="container">
                <div class="copy-right">
                    <h6>© 2024 Blog . Made with <span class="fa fa-heart" aria-hidden="true"></span>, Designed by
                        <a href="https://w3layouts.com">Hapsatou</a> </h6>
                </div>
                <ul class="author-icons mt-4">
                    <li><a class="facebook" href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                    </li>
                    <li><a class="twitter" href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                    <li><a class="google" href="#url"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                    </li>
                    <li><a class="linkedin" href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                    <li><a class="github" href="#url"><span class="fa fa-github" aria-hidden="true"></span></a></li>
                    <li><a class="dribbble" href="#url"><span class="fa fa-dribbble" aria-hidden="true"></span></a></li>
                </ul>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-up"></span>
                </button>
            </div>
        </div>

        <!-- move top -->
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
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
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>