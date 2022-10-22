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

        <button class="big-introduction__button button button--with-arrow button--hover-effect-1">Sprawdź</button>

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

          <?php echo file_get_contents('components/template-recommended-list.html'); ?>
  
        </aside>

      </div>

      <section class="standalone-section">

        <h2 class="heading heading--color-4 heading--with-pipe">Na antenie</h2>

        <div class="scroll-with-pointer" data-pointer-scroller="1">
            
          <?php echo file_get_contents('components/template-scroll.html'); ?>

        </div>

      </section>

      <section class="standalone-section">

        <h2 class="heading heading--color-4 heading--with-pipe">Porady ABC<a class="arrow-link"></a></h2>

        <div class="scroll-with-pointer" data-pointer-scroller="2">
            
          <?php echo file_get_contents('components/template-scroll.html'); ?>

        </div>

      </section>

      <section class="standalone-section">

        <h2 class="heading heading--color-4 heading--with-pipe">ABC Poleca<a class="arrow-link"></a></h2>

        <div class="scroll-with-pointer" data-pointer-scroller="3">
            
          <?php echo file_get_contents('components/template-high-scroll.html'); ?>

        </div>

      </section>

    </div>

  </main>

  <?php echo file_get_contents('components/website-footer.html'); ?>

</body>

</html>