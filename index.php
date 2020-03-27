<!DOCTYPE html>
<html lang="en">
<?php
$tab = ['Mon exemple de titre 1','Mon exemple de titre 2','Mon exemple de titre 3', 'Mon exemple de titre 4',
        'Mon exemple de titre 5'];

$valeur  =rand(0,4);
session_start();
    $ancien_valeur_publicitaire = $_SESSION['valeur_publicitaire'];
    $ancien_valeur = $_SESSION['valeur'];


if(!isset($_GET['tpl']))
{
    while (true) {
        $valeur_publicitaire = rand(0, 2);

        if ($_SESSION['valeur_publicitaire'] != $valeur_publicitaire) {
            $_SESSION['valeur_publicitaire'] = $valeur_publicitaire;
            break;
        }
    };
}

    if(!isset($_GET['titre'])) {
        while (true) {
            $valeur = rand(0, 4);

            if ($_SESSION['valeur'] != $valeur) {
                $_SESSION['valeur'] = $valeur;
                break;
            }
        };
    }
    if(isset($_GET['tpl'] )) {  $valeur_publicitaire =$_GET['tpl']; }
    if(isset($_GET['titre'] )) { $valeur= $_GET['titre']; }
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-1" id="navbar">
          <div class="container position-relative">
              <a class="navbar-brand" href="#">
                  <h1 class="font-weight-bold text-pink my-0">Blog.</h1>
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link d-flex flex-column" href="index.html">
                              <h5 class="m-0">New</h5>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link d-flex flex-column" href="index.html">
                              <h5 class="m-0">Popular</h5>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link d-flex flex-column btn btn-primary rounded-pill px-4 mx-2 mx-sm-4" href="index.html">
                              <h5 class="m-0">Subscribe</h5>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
    <!--
        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>
          -->

          <!-- Blog Post -->
        <div class="card mb-4">
            <?php
                if( !empty($valeur_publicitaire_session) && $valeur_publicitaire_session ==0 || $valeur_publicitaire ==0) {?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert" id="list-example">
              <!--  <h4 class="alert-heading">Annonce publicitaire 1!</h4>-->
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 align="center">
                    <img align="center" src="pub.jpeg" width="100%" height="90px">

                </h4>
            </div>

            <?php } ?>
            <div class="style_bg_img" style="background-image: url('img/banière.jpg');">
                <div class="style_bg_img_bloc pt-5">
                    <div class="container pt-5 mt-5">
                        <div class="pt-5 mt-5">
                            <div class="py-5 mt-5 text-white animated fadeInDown slow">
                                <button class="btn btn-primary rounded-pill px-4">Personnel Personnel</button>
                                <h1 class="my-4 font-weight-bold display-2">5 Ways Nature can make your life better</h1>
                                <div class="my-4">
                                    <div class="media">
                                        <a href="#">
                                            <img src="img/compta1.jpg" width="60" height="60" class="mr-3 rounded-circle border" alt="...">
                                        </a>
                                        <div class="media-body text-left">
                                            <h4 class="mt-0 mb-1 text-white">Nom Prénom</h4>
                                            <small class="text-white-50">Domaines de compétences</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                  <div class="card-body">
                    <h2 class="card-title"><?= $tab[$valeur] ?></h2>
                      <?php if( !empty($valeur_publicitaire_session) && $valeur_publicitaire_session ==1 ||$valeur_publicitaire ==1) { ?>
                      <div class="alert alert-primary alert-dismissible fade show " role="alert" id="pub3">
                          <h4 class="alert-heading">Annonce publicitaire 2!</h4>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                          <hr>
                          <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                      </div>
                      <?php } ?>
                      <div class="row">
                          <?php if( !empty($valeur_publicitaire_session) && $valeur_publicitaire_session ==1 ||$valeur_publicitaire ==1 || $valeur_publicitaire ==0) { ?>
                          <div class="col-lg-12">
                              <?php }else { ?>
                          <div class="col-lg-7" id="paragraphe">
                              <?php } ?>
                            <p class="card-text">
                                Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                                On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
                            </p>
                      </div>
                              <?php if(!empty($valeur_publicitaire_session) && $valeur_publicitaire_session ==2 ||$valeur_publicitaire ==2) { ?>
                              <div class="col-lg-5">
                              <div class="alert alert-primary alert-dismissible fade show" role="alert" id="pub4">
                                  <h4 class="alert-heading">Annonce publicitaire 3!</h4>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                  <hr>
                                  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                              </div>

                      </div>
                              <?php } ?>
                      </div>
                  </div>


        </div>


        <!-- Pagination -->
            <div class="mt-5 text-center">
                <a class="btn btn-secondary rounded-pill px-4 mx-2 mx-sm-4" href="/startbootstrap-blog-home-gh-pages?tpl=<?= $ancien_valeur_publicitaire?>&titre=<?=$ancien_valeur ?>">&larr; Précédent</a>
                <a class="btn btn-secondary rounded-pill px-4 mx-2 mx-sm-4" href="/startbootstrap-blog-home-gh-pages/">Suivant &rarr;</a>
            </div>


          <div class="card my-4">
              <h5 class="card-header">More Like this</h5>
              <div class="card-group">
                 <?php include('template_little_blog.php');

                  echo  $tab_side[$aleatoire]; $compte[$aleatoire]+=1;
                  echo $tab_side[$aleatoire+1>9 ? $aleatoire-1 :  $aleatoire+1 ]; $compte[$aleatoire+1>9 ? $aleatoire-1 :  $aleatoire+1 ]+=1;
                   echo $tab_side[$aleatoire+2>9 ? $aleatoire-2 : $aleatoire+2]; $compte[$aleatoire+2>9 ? $aleatoire-2 : $aleatoire+2]+=1;

                  ?>


              </div>
          </div>
          <div class="card my-4 ">
              <?php if(!empty($valeur_publicitaire_session) && $valeur_publicitaire_session ==0 || $valeur_publicitaire ==0) { ?>
              <div class="alert alert-primary alert-dismissible fade show " role="alert" id="pub1">
                 <!-- <h4 class="alert-heading">Annonce publicitaire 1!</h4> -->
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <img align="center" src="publ.jpeg" width="100%" height="210px">

                  <!--
                  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                  <hr>
                  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  -->
              </div>
              <?php }
                var_dump($compte);
              ?>
          </div>
      </div>

      <!-- Sidebar Widgets Column -->


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    // Stockage des différents éléments dans les variables
    var pub1 = $('#list-example');
    var pub2 = $('#pub1');
    var pub3 = $('#pub3');
    var pub4 = $('#pub4');

    var lastScrollOffset = $(window).scrollTop();
    var vwindow = $(window);

    var lastScrollTop = 0;

    // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
    window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
        var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
        if (st > lastScrollTop){
            console.log('Vers le bas');
            if(st>=0 && st<980)
            {
                pub4.show()
            }else
            {
                pub4.hide()
            }

            if(st>=0 && st<624)
            {
                pub3.show()
            }else
            {
                pub3.hide()
            }
            console.log(st);
           // pub1.hide()
            pub2.show();


        } else {

            pub1.show();
            pub2.hide()
            console.log('Vers le haut');
            console.log(st);
        }
        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
    }, false);


</script>

</body>
<?php ?>
</html>
