<?php

    $tab_side= [
        '<div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title1</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
          </div>',
        '
          <div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title2</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>
        ',
        '  <div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title3</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '        <div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title4</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
    '            <div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title5</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
                '<div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 6</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '<div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 7</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '<div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 8</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
        '<div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Card title 9</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                  </div>',
                '<div class="card">
                      <img class="card-img-top" src="image.png" alt="Card image cap">
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