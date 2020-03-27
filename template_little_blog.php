<?php

$tab_side = [
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

$morePost1 = rand(0, 9);

while (true) {
    $morePost2 = rand(0, 9);

    if ($morePost2 != $morePost1) {
        break;
    }
};

while (true) {
    $morePost3 = rand(0, 9);

    if ($morePost3 != $morePost1 && $morePost3 != $morePost2) {
        break;
    }
};

echo $tab_side[$morePost1];
echo $tab_side[$morePost2];
echo $tab_side[$morePost3];

// if(!isset($_SESSION['more_posts'])) {
//     $_SESSION['more_posts'] = [
//         0 => 0,
//         1 => 0,
//         2 => 0,
//         3 => 0,
//         4 => 0,
//         5 => 0,
//         6 => 0,
//         7 => 0,
//         8 => 0,
//         9 => 0,
//     ];
// }

// $_SESSION['more_posts'][$morePost1] += 1;
// $_SESSION['more_posts'][$morePost2] += 1;
// $_SESSION['more_posts'][$morePost3] += 1;