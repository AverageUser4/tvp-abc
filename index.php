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

      <div>

        <section class="news-and-recommended">
  
          <h2 class="heading heading--color-4 heading--with-pipe">Aktualności</h2>

          <article class="big-info-box">

            <a class="link">

              <img class="big-info-box__image" src="images/misc/big-article.jpg">
  
              <h3 class="big-info-box__heading heading heading--bold">Henerietta zaprasza na farmę</h3>

            </a>

            <div class="big-info-box__shadow"></div>

          </article>

          <div>

            <article class="info-box">
  
              <a class="link">
  
                <img class="info-box__image" src="images/misc/normal-article-2.jpeg">
    
                <div class="info-box__text-part">
  
                  <h3 class="heading heading--small heading--bold heading--no-margin">Ruszyła Kraina ABC!</h3>
  
                </div>
                
              </a>
  
            </article>
  
            <article class="info-box">
  
              <a class="link">
  
                <img class="info-box__image" src="images/misc/normal-article.png">
    
                <div class="info-box__text-part">
  
                  <h3 class="heading heading--small heading--bold heading--no-margin">Konkurs "Warzywa i owoce"</h3>
  
                </div>
                
              </a>
  
            </article>
    
          </div>

        </section>
  
        <aside>
  
          <h2>Polecane</h2>
  
        </aside>

      </div>

    </div>

  </main>

</body>

</html>