{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de l'article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/details_articles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="retour">
        <a href="/articles/liste_articles" class="btn btn-success return-button"><i class="fas fa-arrow-left"></i> Retour aux articles</a>
    </div>
   <div class="container">
    <h1>Détails de l'article</h1>
    
    <div class="card mb-3" style="max-width: 20rem;">
        @if ($article->image)
            <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->nom}}">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $article->nom }}</h5>
            <p class="card-text">{{ $article->description }}</p>
            <p class="card-text">Date de création : {{ $article->created_at }}</p>
            <p class="card-text">À la Une : {{ $article->la_une ? 'Oui' : 'Non' }}</p>
            <div class="liens">
                <a href="/articles/modifier_articles/{{ $article->id }}" class="btn btn-info"><i class="fas fa-edit"></i> </a>
                <a href="/articles/supprimer/{{ $article->id }}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer {{ $article->nom }} ?')"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
    </div>
   </div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html> --}}
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Design Blog a Blog Category Bootstrap Responsive Website Template | Single post : W3layouts</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style-liberty.css">
  </head>
  <body>


<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="/assests/css/font-awesome.min.css">
<!-- New toolbar-->

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

<nav id="breadcrumbs" class="breadcrumbs">
	<div class="container page-wrapper">
		<a href="/articles/liste_articles">Accueil</a> / Blog / <span class="breadcrumb_last" aria-current="page">Détails articles</span>
	</div>
</nav>

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
<!---728x90--->

</div>

<div class="py-5 w3l-homeblock1 text-center">
    <div class="container mt-md-3">
        <h3 class="blog-desc-big text-center mb-4">{{ $article->nom }}</h3>
        <div class="blog-post-align">
            <div class="blog-post-img">
                <a href="author.html"><img src="https://i.pinimg.com/564x/79/42/1e/79421edd6375c1a47f98eaceff674e7f.jpg" alt="" class="rounded-circle img-fluid" /></a>
            </div>
            <div class="blog-post-info">
                <div class="author align-items-center mb-1">
                    <a href="author.html">Hapsatou</a>  <a href="#url">Rédactrice</a>
                </div>
                <ul class="blog-meta">
                    <li class="meta-item blog-lesson">
                        <span class="meta-value"> {{ $article->created_at }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
<!---728x90--->
</div>

<section class="blog-post-main w3l-homeblock1">
    <!--/blog-post-->
    <div class="blog-content-inf pb-5">
        <div class="container pb-lg-4">
            <div class="single-post-image">
                <div class="post-content">
                    <img src="/assets/images/blogsingle.jpg" class="radius-image img-fluid mb-5" alt="" />
                </div>
            </div>
            <div class="single-post-content">
                @php
                    $firstLetter = substr($article->description, 0, 1);
                @endphp
                <p class="alphabet mb-4"><span class="big-letter">{{ $firstLetter }}</span>{{ substr($article->description, 1) }}</p>
             
                <!--//author-card-->
                <div class="author-card mt-5">
                    <div class="row align-items-center">
                        <div class="col-sm-3 col-6">
                            <div>
                                <img src="https://i.pinimg.com/564x/79/42/1e/79421edd6375c1a47f98eaceff674e7f.jpg" alt="" class="rounded-circle img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-9 mt-sm-0 mt-3">
                            <h3 class="mb-3 title">Hapsatou</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sed et excepturi.
                                Distinctio fugit odit? Fugit ipsam. Lorem ipsum dolor sit.
                            </p>
                            <ul class="author-icons mt-4">
                                <li><a class="facebook" href="#url"><span class="fa fa-facebook"
                                            aria-hidden="true"></span></a> </li>
                                <li><a class="twitter" href="#url"><span class="fa fa-twitter"
                                            aria-hidden="true"></span></a></li>
                                <li><a class="google" href="#url"><span class="fa fa-google-plus"
                                            aria-hidden="true"></span></a></li>
                                <li><a class="linkedin" href="#url"><span class="fa fa-linkedin"
                                            aria-hidden="true"></span></a></li>
                                <li><a class="github" href="#url"><span class="fa fa-github"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="dribbble" href="#url"><span class="fa fa-dribbble"
                                            aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--//author-card-->


                <div class="comments mt-5">
                        @php
                        $commentCount = $article->commentaires()->count();
                        @endphp
                    
                    <h4 class="side-title">Commentaires ({{ $commentCount }})</h4>
                    
                    <div class="container">
                        <div class="card mb-3" style="max-width: 20rem;">
                            <!-- Votre code pour afficher les détails de l'article -->
                        </div>
                    
                        <div class="titre" style="display: flex; justify-content:center; align-items:center; margin-bottom:20px; gap:30px;">
                            <h2>commentaires</h2>
                        </div>
                    
                        @if($article->commentaires->isEmpty())
                            <p>Pas de commentaire pour le moment.</p>
                        @else
                            @foreach ($article->commentaires as $commentaire)
                                <div class="media mt-4">
                                    <div class="img-circle">
                                        <img src="https://img.freepik.com/psd-gratuit/portrait-femme-portant-hijab_23-2150945138.jpg?t=st=1717078237~exp=1717081837~hmac=82a7d467dad8a09dfced94a51f7eb135951b55fabb4c27ed0fd85cae5b368b13&w=740" class="img-fluid" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <ul class="time-rply mb-2">
                                            <li>
                                                <a href="#URL" class="name mt-0 mb-2 d-block">{{ $commentaire->auteur }}</a>
                                                {{ $commentaire->created_at}}
                                            </li>
                                        </ul>
                                        <p>{{ $commentaire->contenu }}</p>
                                        <div class="action" style="display: flex; align-items:center; justify-content:end; float: left; margin-top:10px">
                                            <a href="/commentaires/modifier_commentaires/{{$commentaire->id}}" class="btn btn-info" style="margin-right:10px; "><i class="fas fa-edit"></i> </a>
                                            <a href="/commentaires/supprimer/{{$commentaire->id}}" class="btn btn-danger" style="margin-left: 10px;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="container">

                <div class="leave-comment-form mt-5" id="reply">
                    <h4 class="side-title mb-2">Laisser un commentaire</h4>
                    <form action="/articles/{{$article->id}}/details_articles/commentaires/traitement" method="POST">
                        @csrf
                        <div class="input-grids row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="auteur" class="form-control" placeholder="Votre nom*" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="contenu" class="form-control" placeholder="Votre commentaire*" required=""
                                        spellcheck="false"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit text-left">
                            <button class="btn btn-style btn-primary">Poster un commentaire</button>
                        </div>
                    </form>
                    
                </div>
                </div>
                                

                
            </div>
        </div>
        <!--//blog-post-->
</section>

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
<!---728x90--->
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

<!-- /typig-text-->
<script>
  const typedTextSpan = document.querySelector(".typed-text");
  const cursorSpan = document.querySelector(".cursor");

  const textArray = ["I'm Alexander Ronald." , "Writing is all my Life." , "I Love to write Blog posts!"];
  const typingDelay = 200;
  const erasingDelay = 10;
  const newTextDelay = 100; // Delay between current and next text
  let textArrayIndex = 0;
  let charIndex = 0;

  function type() {
    if (charIndex < textArray[textArrayIndex].length) {
      if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
      typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
      charIndex++;
      setTimeout(type, typingDelay);
    } else {
      cursorSpan.classList.remove("typing");
      setTimeout(erase, newTextDelay);
    }
  }

  function erase() {
    if (charIndex > 0) {
      // add class 'typing' if there's none
      if (!cursorSpan.classList.contains("typing")) {
        cursorSpan.classList.add("typing");
      }
      typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
      charIndex--;
      setTimeout(erase, erasingDelay);
    } else {
      cursorSpan.classList.remove("typing");
      textArrayIndex++;
      if (textArrayIndex >= textArray.length) textArrayIndex = 0;
      setTimeout(type, typingDelay);
    }
  }

  document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
    if (textArray.length) setTimeout(type, newTextDelay + 250);
  });
</script>
<!-- //typig-text-->

<!-- script for featured posts blog slider -->
<script src="/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for featured posts blog slider -->

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