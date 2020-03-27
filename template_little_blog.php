<?php
    include_once("function.php");//connexion à la base de donnée

    $compte = [0,0,0,0,0,0,0,0,0,0];
    $tab_side= [
        '<div class="card">
                      <img class="card-img-top" src="img/image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title1</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
          </div>',
        '
          <div class="card">
                      <img class="card-img-top" src="img/image-1.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title2</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>
        ',
        '  <div class="card">
                      <img class="card-img-top" src="img/image-2.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title3</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '        <div class="card">
                      <img class="card-img-top" src="img/image-5.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title4</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
    '            <div class="card">
                      <img class="card-img-top" src="img/image-6.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title5</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
                '<div class="card">
                      <img class="card-img-top" src="img/image-7.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 6</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '<div class="card">
                      <img class="card-img-top" src="img/image-8.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 7</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '<div class="card">
                      <img class="card-img-top" src="img/image-9.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 8</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '<div class="card">
                      <img class="card-img-top" src="img/image-10.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 9</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
                '<div class="card">
                      <img class="card-img-top" src="img/image-11.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 10</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',


    ];

     $aleatoire= rand(0,9);
    $_SESSION['valeur_subtitle'] = $aleatoire ;

    do {
        $aleatoire= rand(0,9);
    }while($_SESSION['valeur_subtitle'] == $aleatoire);

    function comptage($id_article)
    {
        $count= 0;
        $bdd = db_connect();
        $count++ ;
        $req2 =$bdd->prepare("SELECT  * FROM historique WHERE id_article=?");//
        $req2 ->execute(array($id_article));
        $quete= $req2->fetch(PDO::FETCH_OBJ);
        if(count($quete)!=0)
        {
            While($quete)
            {
                $req = $bdd->prepare('UPDATE historique set nombre=? WHERE  id_article = ?');
                $total = $quete->nombre + $count;
                $req->execute(array($total,$id_article));
            }
        }else {
            $ajoutbonus = $bdd->prepare('INSERT INTO historique(id_article,nombre) VALUES(?,?)');
            $ajoutbonus->execute(array($id_article,$count));
        }




    }