<!DOCTYPE html>
<html lang="en">
<?php
session_start();

$tab = [
  'Mon exemple de titre 1',
  'Mon exemple de titre 2',
  'Mon exemple de titre 3',
  'Mon exemple de titre 4',
  'Mon exemple de titre 5'
];

$valeur  = rand(0, 4);
$ancien_valeur_publicitaire = $_SESSION['valeur_publicitaire'];
$ancien_valeur = $_SESSION['valeur'];


if (!isset($_GET['tpl'])) {
  while (true) {
    $valeur_publicitaire = rand(0, 2);

    if ($_SESSION['valeur_publicitaire'] != $valeur_publicitaire) {
      $_SESSION['valeur_publicitaire'] = $valeur_publicitaire;
      break;
    }
  };
}

if (!isset($_GET['titre'])) {
  while (true) {
    $valeur = rand(0, 4);

    if ($_SESSION['valeur'] != $valeur) {
      $_SESSION['valeur'] = $valeur;
      break;
    }
  };
}
if (isset($_GET['tpl'])) {
  $valeur_publicitaire = $_GET['tpl'];
}
if (isset($_GET['titre'])) {
  $valeur = $_GET['titre'];
}
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" id="main" data-tpl="<?= $valeur_publicitaire ?>">

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
          if (!empty($valeur_publicitaire_session) && $valeur_publicitaire_session == 0 || $valeur_publicitaire == 0) { ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert" id="list-example">
              <!--  <h4 class="alert-heading">Annonce publicitaire 1!</h4>-->
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 align="center">
                <img align="center" src="pub.jpeg" width="100%" height="210px">

              </h4>
            </div>

          <?php } ?>
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">

          <div class="card-body">
            <h2 class="card-title"><?= $tab[$valeur] ?></h2>
            <?php if (!empty($valeur_publicitaire_session) && $valeur_publicitaire_session == 1 || $valeur_publicitaire == 1) { ?>
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
              <?php if (!empty($valeur_publicitaire_session) && $valeur_publicitaire_session == 1 || $valeur_publicitaire == 1 || $valeur_publicitaire == 0) { ?>
                <div class="col-lg-12">
                <?php } else { ?>
                  <div class="col-lg-7" id="paragraphe">
                  <?php } ?>
                  <p class="card-text" id="post">
                    Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                    Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                    On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
                    On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
                    On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
                    On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
                    On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
                  </p>
                  </div>
                  <?php if (!empty($valeur_publicitaire_session) && $valeur_publicitaire_session == 2 || $valeur_publicitaire == 2) { ?>
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
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">

              <a class="page-link" href="/startbootstrap-blog-home-gh-pages?tpl=<?= $ancien_valeur_publicitaire ?>&titre=<?= $ancien_valeur ?>">&larr; Précédent</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="/startbootstrap-blog-home-gh-pages/">Suivant &rarr;</a>
            </li>
          </ul>


          <div class="card my-4">
            <h5 class="card-header">More Like this</h5>
            <div class="card-group">
              <?php include('template_little_blog.php'); ?>
            </div>
          </div>
          <div class="card my-4 ">
            <?php if (!empty($valeur_publicitaire_session) && $valeur_publicitaire_session == 0 || $valeur_publicitaire == 0) { ?>
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
            <?php } ?>
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
    <script src="js/app.js"></script>

</body>

</html>

<?php

if (!isset($_SESSION['history'])) {
  $_SESSION['history'] = [];
}

$_SESSION['history'][] = [
  'tpl' => $valeur_publicitaire,
  'title' => $valeur,
  'posts' => [$morePost1, $morePost2, $morePost3],
];

// var_dump($_SESSION['history']);
?>
<pre>
  <?php die(var_dump(getStats())); ?>
</pre>

<?php

function getStats()
{
  $more_posts = [
    0 => 0,
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
    6 => 0,
    7 => 0,
    8 => 0,
    9 => 0,
  ];

  $tiltes = [
    0 => 0,
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0,
  ];

  $tpls = [
    0 => 0,
    1 => 0,
    2 => 0,
  ];

  foreach ($_SESSION['history'] as $history) {
    $tpls[$history['tpl']] += 1;
    $tiltes[$history['tiltes']] += 1;
    $more_posts[$history['posts'][0]] += 1;
    $more_posts[$history['posts'][1]] += 1;
    $more_posts[$history['posts'][2]] += 1;
  }

  asort($more_posts);
  $arr = array_reverse($more_posts);
  $top_posts = array_slice($arr, 0, 3);
  var_dump($more_posts);

  max($tpls);
  max($tiltes);
  max($more_posts);
  
  return [max($tpls), max($tiltes), $top_posts];
}

?>