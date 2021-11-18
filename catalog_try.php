<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости Цифрового Ветра</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dcc2a17f51.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/styles/catalog_try.css">
    <link rel="stylesheet" href="/styles/pages.css">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <script type="text/javascript" src="/scripts/main.js"></script>
    <script type="text/javascript" src="/scripts/pages.js"></script>
    <script type="text/javascript" src="/scripts/filters.js"></script>
    <script type="text/javascript" src="/scripts/grid.js"></script>
  </head>
  <body>
    <?php include_once 'components/menu.php'; ?>
    <?php include_once 'components/header.php'; ?>
    <div class="container">
      <section class="catalog">
        <h2 class="mainh2 d-flex align-items-center"> <a><i class="back fas fa-arrow-left"></i> <span>&nbsp; Назад</span> </a>&nbsp;   Каталог работ</h2>
        <div class="row">
          <div class="col-lg-3 about_filters"> <!-- колонка с фильтрами-->
            <div class="filter_open d-flex flex-row justify-content-between align-items-center cp" onclick="openFilters('div.filters', event)">
              Номинации &nbsp; <i class="fas fa-chevron-up arrow"></i>
            </div>

            <div class="filters" style="display: none;">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Все номинации
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                  Тематический сайт
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault4">
                  Двумерная статичная графика
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault5">
                <label class="form-check-label" for="flexRadioDefault5">
                  Трехмерная статичная графика
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault6">
                <label class="form-check-label" for="flexRadioDefault6">
                  Двумерная анимация
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault7">
                <label class="form-check-label" for="flexRadioDefault7">
                  Компьютерные видео
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault8">
                <label class="form-check-label" for="flexRadioDefault8">
                  Цифровое видео
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault9">
                <label class="form-check-label" for="flexRadioDefault9">
                  Мобильные приложения
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault10">
                <label class="form-check-label" for="flexRadioDefault10">
                  Специальная номинация "60 лет полета в космос"
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault11">
                <label class="form-check-label" for="flexRadioDefault11">
                  Специальная номинация "Data Science"
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nomination" id="flexRadioDefault12">
                <label class="form-check-label" for="flexRadioDefault12">
                  Специальная номинация "Наука и технологии"
                </label>
              </div>
            </div>
          </div>
          <div class="col catalog"><!-- колонка с работами-->
            <input type="text" name="search" value="" placeholder="Поиск...">
            <div class="ages row"> <!-- возратсты -->
              <div class="left-ages col-8 d-flex flex-row align-items-center justify-content-start">
                <div class="age now">
                  до 12 лет
                </div>
                <div class="age">
                  13-17 лет
                </div>
                <div class="age">
                  18-25 лет
                </div>
              </div>
              <div class="all-ages col-4 d-flex flex-row align-items-center justify-content-end">
                <div class="age all">
                  Все работы
                </div>
              </div>
            </div> <!-- div.ages.row -->
            <div class="works grid"> <!-- сами работы -->
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work_example.png" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>987789</span>
                      <span>"The Way Of Ninja"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work_example2.jpg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>987651</span>
                      <span>"Девушка"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work_example3.jpg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>123090</span>
                      <span>"The Ugly Guy"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work.jpg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>987789</span>
                      <span>"Пейзаж"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work1.jpeg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>987651</span>
                      <span>"Хитрость"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work2.jpg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>123090</span>
                      <span>"Видео обо всем"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/work3.jpg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>123090</span>
                      <span>"О космосе"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/wk.png" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>987789</span>
                      <span>"Естественно"</span>
                    </div>
                  </div>
                  <div class="work"> <!-- одна работа -->
                    <img src="images/works/wk2.jpg" alt="">
                    <div class="text d-flex flex-column justify-content-between align-items-center">
                      <span>987651</span>
                      <span>"Природа"</span>
                    </div>
                  </div>
            </div> <!-- div.works -->
            <?php include_once 'components/pages.php' ?>

          </div>
        </div>
      </section>
      <?php include_once 'components/footer.php'; ?>
    </div>
  </body>
</html>
