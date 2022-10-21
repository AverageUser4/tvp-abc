<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TVP ABC</title>
  <link rel="stylesheet" href="css/home-main.css">
  <script type="module" src="js/home-main.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

  <?php 
    echo file_get_contents('components/now-on-air.html');
    echo file_get_contents('components/website-header.html');
  ?>

  <section class="big-introduction big-introduction--under-header">

    <a class="big-introduction__link">
      
        <img class="big-introduction__image" src="images/misc/big-background.jpg">

        <button class="big-introduction__button button button--with-arrow">Sprawdź</button>

    </a>

  </section>

  <main class="main-part">

    <div class="website-content">

      <div class="frontpage-grid">

        <section class="frontpage-grid-left">
  
          <h2 class="heading heading--color-4 heading--with-pipe">Aktualności <a class="arrow-link"></a></h2>

          <article class="big-info-box">

            <a class="link">

              <img class="big-info-box__image" src="images/misc/big-article.jpg">
  
              <h3 class="big-info-box__heading heading heading--bold">Henerietta zaprasza na farmę</h3>

            </a>

            <div class="big-info-box__shadow"></div>

          </article>

          <div class="frontpage-grid-left__bottom">

            <article class="info-box info-box--interactive">
  
              <a class="link">
  
                <img class="info-box__image" src="images/misc/normal-article-2.jpeg">
    
                <div class="info-box__text-part">
  
                  <h3 class="heading heading--small heading--bold heading--no-margin">Ruszyła Kraina ABC!</h3>
  
                </div>
                
              </a>
  
            </article>
  
            <article class="info-box info-box--interactive">
  
              <a class="link">
  
                <img class="info-box__image" src="images/misc/normal-article.png">
    
                <div class="info-box__text-part">
  
                  <h3 class="heading heading--small heading--bold heading--no-margin">Konkurs "Warzywa i owoce"</h3>
  
                </div>
                
              </a>
  
            </article>
    
          </div>

        </section>
  
        <aside class="frontpage-grid__right">
  
          <h2 class="heading heading--color-4 heading--with-pipe">Polecane</h2>

          <ul class="recommended-list">


            <?php 
            
              foreach([
                'Uwaga casting!',
                'Październikowy numer "Stasia"!',
                '"Kolaski za odblaski. Bezpieczne dzieci na drodze"',
                'Musical "Friends" w Teatrze Capitol',
                'Mali Wielcy Odkrywcy',
                '"Pordóże z Ambasadorką Bezpieczeństwa" cz. 3',
                '"Pordóże z Ambasadorką Bezpieczeństwa" cz. 2',
                '"Pordóże z Ambasadorką Bezpieczeństwa" cz. 1'
              ] as $text) {
                echo "
                  <li class='recommended-list__item'>
  
                    <article>
  
                      <a class='recommended-list__link link'>
  
                        <img class='recommended-list__image' src='images/misc/recommended.jpg'>
  
                        <h4 class='heading heading--nano heading--no-margin'>$text</h4>
  
                      </a>
  
                    </article>
  
                  </li>  
                ";
              }

            ?>
            
          </ul>
  
        </aside>

      </div>

      <section>

        <h2 class="heading heading--color-4 heading--with-pipe">Na antenie</h2>

        <div class="scroll-with-pointer" data-pointer-scroller="1">
            
          <ul class="scroll-with-pointer-content">
          

<?php 
$i = 1;
foreach([
  'Alice i Lewis',
  'Wishenpoof',
  'Tupcio Chrupcio',
  'Super Wings: Super Lotki',
  'Sadie Sparks',
  'Jonasz i jego paczka',
  'Bob Budowniczy',
  'Świnka Peppa',
  // 'Mali Wielcy Odkrywcy',
  // '"Pordóże z Ambasadorką Bezpieczeństwa" cz. 3',
  // '"Pordóże z Ambasadorką Bezpieczeństwa" cz. 2',
  // '"Pordóże z Ambasadorką Bezpieczeństwa" cz. 1'
] as $text) {
  $str = <<<END

  <li class="info-box info-box--small">
  
    <a class="link">
  
      <img class="info-box__image" src="images/misc/slideshow-$i.jpg">
  
      <div class="info-box__text-part">
  
        <h3 class="heading heading--nano heading--bold heading--no-margin">$text</h3>
  
      </div>
      
    </a>
  
  </li>
  
  END;

  $i++;
  echo $str;
}
          
?>

          </ul>

        </div>

      </section>

    </div>

  </main>

</body>

</html>