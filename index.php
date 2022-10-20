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

  <main>

    <div class="website-content">

      <div>

        <section>
  
          <h2>Aktualności</h2>

          <article class="">

            <img src="images/misc/normal-article.png">

            <h3><a>Henerietta zaprasza na farmę</a></h3>

          </article>

          <article class="info-box">

            <img src="images/misc/normal-article.png">

            <h3><a>Ruszyła Kraina ABC!</a></h3>
            <h3><a>Konkurs "Warzywa i owoce"</a></h3>

          </article>
  
        </section>
  
        <aside>
  
          <h2>Polecane</h2>
  
        </aside>

      </div>

    </div>

  </main>

</body>

</html>