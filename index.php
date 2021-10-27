<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Цифровой ветер - международный конкурс</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dcc2a17f51.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <script type="text/javascript" src="/scripts/main.js"></script>
    <script type="text/javascript" src="/scripts/like.js"></script>
  </head>
  <body>
    <div class="begin"> <!-- 100vh -->
      <!-- контейнер общий для всех, чтобы по нему удобно было позиционировать абсолютно кнопку -->
      <div class='container' style="position: relative; height: 100%;">
        <header class="header animate__animated animate__fadeIn">
          <!-- <div class="container"> -->
            <div class="header d-flex flex-row justify-content-between align-items-center">
              <!-- должно быть краткое лого -->
              <a href="index.php"><img src="images/logos/fulllogo.svg" alt="" height="70px"></a>
              <!-- меню. перенесено из хедера -->
              <!-- <a class="fas fa-bars text-orange openmenu" onclick="showMenu('.mainmenu')"></a> -->
            </div>
          <!-- </div> -->
        </header>

        <!-- не в header, чтобы он оставался при открытии меню и превращался в крестик. позиционируется относительно контейнера -->
        <a class="fas fa-bars text-black openmenu" onclick="showMenu('.mainmenu')"></a>
        <!-- основная часть -->
        <main style="position: relative;">
          <div class="dw d-flex flex-column justify-content-start align-items-start  animate__animated animate__slideInLeft">
            <span>Цифровой</span>
            <span>ветер</span>
          </div>
          <!-- черточка -->
          <span class="tire bg-orange animate__animated animate__slideInLeft"></span>
          <p class='about_dw animate__animated animate__slideInRight'>
            Открытый международный конкурс компьютерных работ среди детей, юношества и студенческой молодежи
          </p>
        </main>
        <!-- нижняя менюшка -->
        <section class="downheader animate__animated animate__fadeIn">
          <div class="container d-flex flex-row justify-content-between align-items-center">
            <div class="leftside d-flex flex-row align-items-center">
              <a href="#" class="animate__animated animate__slideInUp">Вход</a>
              <a href="#freshresults" class='results animate__animated animate__slideInUp' id="tofreshresults">Результаты 2021</a>
            </div>
            <div class="rightside d-flex flex-row justify-content-end align-items-center">
              <a href="#" class='text-orange takepart text-brightorange-hover animate__animated animate__slideInUp'>Стать участником</a>
            </div>
          </div>
        </section>
      </div>


      <?php include_once 'components/menu.php'; ?>
    </div>
    <!-- То, что при скролле -->
    <div class="more" id="freshresults">
      <div class="container">
        <section class="freshresults">
          <h2 class='mainh2'>Определены финалисты Международного тура конкурса “Цифровой Ветер-2021”</h2>
          <div class="two_cols d-flex flex-row justify-content-around align-items-center">
            <div class="left-col">
              В мае 2021 г. в Научно-информационном центре Саратовского государственного технического университета имени Гагарина Ю.А. состоялась торжественная церемония награждения победителей ХX Международного конкурса компьютерных работ среди детей, юношества и студенческой молодежи «Цифровой ветер-2021». Финалистами конкурса стали 97 участников из России и Беларуси.
              <br>
              «Цифровой ветер-2021» проводился по 7 номинациям. В конкурсе было зарегистрировано 4823 работы из двухсот двадцати городов России, Беларуси, Казахстана и Украины. Региональные туры прошли в Саратове, Пензе, Липецке.
              <br>
              В рамках конкурса в течение марта и апреля в СГТУ прошел IT-марафон «Цифровой ветер». Сотни школьников и студентов посетили 15 бесплатных мастер-классов. Спикеры из лучших IT-компаний и преподаватели университета рассказывали про самые разные технологии, которые используют современные разработчики, дизайнеры, рекламисты и медийщики. Все этапа марафона были интерактивными. Участники пробежали спринт по созданию веб-сайта за три часа, выдержали интенсивную тренировку по машинному обучению, кодили на время и проверяли интуицию, учились правильно монтировать видео и распознавать объекты с помощью компьютерного зрения. И даже смогли придумать концепцию оформления известного саратовского телеканала.
              <br>
              Церемония награждения победителей конкурса «Цифровой ветер» также прошла в интерактивном формате. В торжественной части авторы лучших работ получили свои награды из рук руководителей технического университета, IT-компаний-партнеров конкурса, а в неформальной - участвовали в magicshow иллюзиониста Петра Прокина, танцевали вместе с коллективом современного и уличного танца Shameless, получали неожиданные призы от оргкомитета и партнеров конкурса и порции видеоюмора от котиков-реперов.
              <br>
              Церемонию открыл ректор СГТУ имени Гагарина Ю.А. Олег Афонин. «20-летний «Цифровой ветер» уже старше большинства его участников, - подчеркнул Олег Александрович. - Но всегда будет молод, так как каждый сезон наполняется молодой энергией его участников. Возраст конкурсантов – от малышей до выпускников вузов, но всех есть общее качество – умение достигать своей цели и стремление к победе. Участники «ветра» – это люди, которые сочетают владение технологиями и творчество. Именно такие специалисты развивают сферу информационных технологий. Я желаю ребятам больших профессиональных побед!»
              <br>
              Цифровой ветер прежде всего объединяет людей, - считает директор Института прикладных информационных технологий и коммуникаций, председатель Экспертного совета конкурса Светлана Кумова. - Разрабатывать по нескольку недель конкурсный проект, часами разбирать работы на экспертном совете готовы только увлеченные, азартные, целеустремленные айтишники, вне зависимости от их возраста. Именно «Цифровой ветер» помогает проявить себя будущим профессионалам. Мы рады будем видеть всех участников в стенах нашего института, как студентов, как сотрудников, как бизнес-партнеров.
              <br>
              Победители номинации «Трехмерная анимация» Дмитрий Савичев и Константин Красюков из Астрахани рассказали, что для подготовки проектов им пришлось изучать новые программы. Ребята трудились над работами по несколько недель и в результате – 1 и 3 место в номинации.
              <br>
              Виктория Романихина , золотой призер номинации «Цифровое видео», рассказала, что долго шла к своей победе. Участвовала в конкурсе несколько лет, и наконец цель достигнута – Виктория лучшая в своей номинации. «Подготовить призовую работу мне помогли знания, полученные в родном Институте прикладных информационных технологий и коммуникаций СГТУ,» - считает студентка.
              <br>
              Семилетняя Дарья Золотарева из села Хлебное Липецкой области не только получила приз как самая юная участница конкурса, но и завоевала достойное 2 место за полезную видеоработу о вреде многочасового просмотра экрана телефона. «Мама и папа сказали, чтобы я отправила свое видео на конкурс, - призналась Даша. – Я приехала, получила диплом и много призов. Мне тут очень понравилось.»
              <br>
              Настя Козлова в Детской компьютерной школе изучает разработку веб-сайтов. Конкурсную работу – сайт «Мир-2077» она делала целый месяц: «Я использовала HTML СSS Java – все, чему нас учила Екатерина Михайловна, сделала несколько разделов. Мне нравится писать сайты, но я хочу попробовать и другие направления в Детской компьютерной школе. Точно знаю, что выберу профессию айтишника!»

              <div class="blur"></div>
            </div>
            <div class="right-col">
              <div class="pic"></div>
              <div class="result_links">
                <div class="towinners d-flex flex-row justify-content-end align-items-center">
                  <div class="d-flex flex-row justify-content-end align-items-center">
                    <a href="#">Список победителей международного тура Цифрового ветра 2021</a>
                  </div>
                </div>
                <div class="togalleries">
                  <div class="d-flex flex-column lustify-content-around align-items-start">
                    <h5>Фотоотчет</h5>
                    <a href="#">На сайте Цифрового ветра</a>
                    <a href="#">Альбом ВК №1</a>
                    <a href="#">Альбом ВК №2</a>
                    <a href="#">Facebook</a>
                    <a href="#">Видео</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class='voting'>
        <h2 class='mainh2'>Ход голосования конкурса</h2>
          <div class='row'>
            <div class='col-12 col-md-6 col-lg-4'>
              <div class="work">
                <div class="pic" style="background-image: url(images/works/work_example.png)"></div>
                <div class="text d-flex flex-row justify-content-between align-items-center">
                  <div class="button">
                     <p><i class="fab fa-gratipay"></i> &nbsp; <span>36</span></p>
                     <div class="shadow">
                       <span><i class="fab fa-gratipay"></i> &nbsp; <span>Мне нравится</span></span>
                     </div>
                  </div>
                  <span>The Way of Ninja</span>
                </div>
              </div>
            </div>

            <div class='col-12 col-md-6 col-lg-4'>
              <div class="work">
                <div class="pic" style="background-image: url(images/works/work_example.png)"></div>
                <div class="text d-flex flex-row justify-content-between align-items-center">
                  <div class="button">
                     <p><i class="fab fa-gratipay"></i> &nbsp; <span>36</span></p>
                     <div class="shadow">
                       <span><i class="fab fa-gratipay"></i> &nbsp; <span>Мне нравится</span></span>
                     </div>
                  </div>
                  <span>The Way of Ninja</span>
                </div>
              </div>
            </div>

            <div class='col-12 col-md-6 col-lg-4'>
              <div class="work">
                <div class="pic" style="background-image: url(images/works/work_example.png)"></div>
                <div class="text d-flex flex-row justify-content-between align-items-center">
                  <div class="button">
                     <p><i class="fab fa-gratipay"></i> &nbsp; <span>36</span></p>
                     <div class="shadow">
                       <span><i class="fab fa-gratipay"></i> &nbsp; <span>Мне нравится</span></span>
                     </div>
                  </div>
                  <span>The Way of Ninja</span>
                </div>
              </div>
            </div>

            <div class='col-12 col-md-6 col-lg-4'>
              <div class="work">
                <div class="pic" style="background-image: url(images/works/work_example.png)"></div>
                <div class="text d-flex flex-row justify-content-between align-items-center">
                  <div class="button">
                     <p><i class="fab fa-gratipay"></i> &nbsp; <span>36</span></p>
                     <div class="shadow">
                       <span><i class="fab fa-gratipay"></i> &nbsp; <span>Мне нравится</span></span>
                     </div>
                  </div>
                  <span>The Way of Ninja</span>
                </div>
              </div>
            </div>

            <div class='col-12 col-md-6 col-lg-4'>
              <div class="work">
                <div class="pic" style="background-image: url(images/works/work_example.png)"></div>
                <div class="text d-flex flex-row justify-content-between align-items-center">
                  <div class="button">
                     <p><i class="fab fa-gratipay"></i> &nbsp; <span>36</span></p>
                     <div class="shadow">
                       <span><i class="fab fa-gratipay"></i> &nbsp; <span>Мне нравится</span></span>
                     </div>
                  </div>
                  <span>The Way of Ninja</span>
                </div>
              </div>
            </div>

            <div class='col-12 col-md-6 col-lg-4'>
              <div class="work">
                <div class="pic" style="background-image: url(images/works/work_example.png)"></div>
                <div class="text d-flex flex-row justify-content-between align-items-center">
                  <div class="button">
                     <p><i class="fab fa-gratipay"></i> &nbsp; <span>36</span></p>
                     <div class="shadow">
                       <span><i class="fab fa-gratipay"></i> &nbsp; <span>Мне нравится</span></span>
                     </div>
                  </div>
                  <span>The Way of Ninja</span>
                </div>
              </div>
            </div>
          </div>

          <div class="tocatalog" href="catalog.php" onclick="location.href='catalog.php';">
            <i class="fas fa-arrow-right"></i>
            <span>К катологу работ</span>
          </div>
        </section>
      </div>
    </div>

    <?php include_once 'components/footer.php'; ?>

    <div class="forzoomed d-flex flex-row justify-content-around align-items-center">
      <i class="fas fa-search-plus"></i>
    </div>
  </body>
</html>
