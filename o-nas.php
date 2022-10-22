<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O nas | TVP ABC</title>
  <link rel="stylesheet" href="css/o-nas-main.css">
  <script type="module" src="js/o-nas-main.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

  <?php 
    echo file_get_contents('components/website-header.html');
  ?>

  <main class="main-part main-part--no-background-image">

    <div class="website-content website-content--thin">

      <h1 class="heading heading--color-2 heading--small-to-big heading--bold">Witamy w TVP ABC – <br> najsympatyczniejszym kanale dla dzieci!</h1>

      <img class="image image--with-radius" src="images/misc/about-us-1.jpeg">

      <section class="small-standalone-section">

        <h2 class="heading heading--small heading--color-3 heading--bold heading--no-margin">JESTEŚMY KANAŁEM TELEWIZYJNYM (i nie tylko) …</h2>

        <p class="paragraph">
          … dla dzieci – wyjątkowym, jedynym bezpłatnym, naziemnym i dostępnym w każdym zakątku Polski, w każdym domu.
          Naszą bogatą, atrakcyjną i przyjazną ofertę programową adresujemy przede wszystkim do maluchów, przedszkolaków i uczniów młodszych klas szkoły podstawowej.
          Nie zapominamy jednak o nastolatkach i młodzieży, a także o rodzicach. Oni również znajdą w naszym repertuarze coś dla siebie.
        </p>

      </section>

      <section class="small-standalone-section">

        <h2 class="heading heading--small heading--color-3 heading--bold heading--no-margin">JESTEŚMY z WAMI 8 lat</h2>

        <p class="paragraph">
          Pojawiliśmy się w Waszych domach, na ekranach telewizorów,
          15 lutego 2014 r. Co roku, w tym dniu świętujemy nasze urodziny,
          dając szansę na zdobycie wspaniałych nagród w MARATONACH KONKURSOWYCH,
          uwielbianych przez widzów. 
        </p>

      </section>

      <section class="small-standalone-section">

        <h2 class="heading heading--small heading--color-3 heading--bold heading--no-margin">JESTEŚMY GODNI ZAUFANIA</h2>

        <p class="paragraph">
          Naszym nadrzędnym celem jest zapewnienie Waszym dzieciom bezpiecznych
          treści. Spośród wielu ofert, to właśnie nam możecie zaufać, zostawiając
          dziecko sam na sam z naszymi programami i bajkami, nie martwiąc się,
          że pociecha zobaczy coś, czego widzieć nie powinna.
        </p>

      </section>

      <section class="small-standalone-section">

        <h2 class="heading heading--small heading--color-3 heading--bold heading--no-margin">JESTEŚMY EDUKACYJNI</h2>

        <p class="paragraph">
          Nasze własne produkcje są tworzone przez pełen pasji zespół, bardzo doświadczony w realizacji programów dla dzieci i z masą niepowtarzalnych, fantastycznych pomysłów.
          Takie audycje jak: „Przyjaciele Misia i Margolci”, „Zwierzaki Czytaki”, „Figu Migu” i inne, których pełna oferta znajduje się<a class="link link--bold link--color-3">tutaj</a> – bawią – ucząc i uczą – bawiąc.
          Ogromną wartością jest ciągłość pokoleniowa, która daje możliwość wspólnego przeżywania i dzielenia się pozytywnymi emocjami. Niektórzy rodzice pamiętają postacie czy programy ze swojego dzieciństwa. 
        </p>

      </section>

      <section class="small-standalone-section">

        <h2 class="heading heading--small heading--color-3 heading--bold heading--no-margin">JESTEŚMY LIDEREM</h2>

        <p class="paragraph">
          Od kilku lat, dzięki Państwa zaufaniu, z dumą utrzymujemy pozycję
          lidera wśród kanałów dziecięcych dostępnych w Polsce. To daje nam
          ogromną motywację i energię do działania. Chcemy się stale rozwijać
          dla Was i Waszych pociech, więc…
        </p>

      </section>

      <section class="small-standalone-section">

        <h2 class="heading heading--small heading--color-3 heading--bold heading--no-margin">JESTEŚMY ONLINE</h2>

        <p class="paragraph">
          Budujemy świat TVP ABC również poza anteną. Chcemy, aby atrakcyjne,
          mądre treści były dostępne zawsze wtedy, gdy dzieci i rodzice mają
          na to ochotę. Z tą myślą zbudowaliśmy <a class="link link--bold link--color-3">BAJKOWĄ KRAINĘ</a>, która jest dla
          Waszych dzieci bezpieczną przestrzenią w Internecie. 
        </p>

      </section>

      <h2 class="heading heading--small heading--color-3 heading--bold">JESTEŚMY… TVP ABC!</h2>

      <img class="image image--with-radius" src="images/misc/about-us-2.jpeg">

    </div>

  </main>

  <?php echo file_get_contents('components/website-footer.html'); ?>

</body>

</html>