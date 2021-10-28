<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Way Of Ninja</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dcc2a17f51.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <link rel="stylesheet" href="/styles/workcard.css">
    <script type="text/javascript" src="/scripts/main.js"></script>
    <script type="text/javascript" src="/scripts/workcard.js"></script>
  </head>
  <body>
    <?php include_once 'components/menu.php'; ?>
    <?php include_once 'components/header.php'; ?>
    <div class="container">
      <section class="workcard">
        <h2 class="mainh2 d-flex align-items-center"> <a><i class="back fas fa-arrow-left"></i> <span>&nbsp; Назад</span> </a>&nbsp;   The Way Of Ninja</h2>
        <div class="row">
          <div class="photo col-12 col-md-6">

          </div>
          <div class="description col-12 col-md-6">
            <p>
              <span class="heading">Номер работы: </span>
              &nbsp;
              <span>987789</span>
            </p>
            <p>
              <span class="heading">Город: </span>
              &nbsp;
              <span>Улан-Удэ</span>
            </p>
            <p>
              <span class="heading">Адрес проекта: </span>
              &nbsp;
              <span>
                <a class="cp fas fa-external-link-alt" href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Перейти по ссылке"></a>
                &nbsp;
                <i class="cp far fa-copy" data-bs-toggle="tooltip" data-bs-placement="right" title="Копировать ссылку" onclick="copyLink('sstu.ru')"></i>
                <span class="copied" style="opacity: 0">Ссылка скопирована!</span>
              </span>
            </p>
            <p>
              <span class="heading">Тур: </span>
              &nbsp;
              <span>Международный</span>
            </p>
            <p>
              <span class="heading">Рейтинг: </span>
              &nbsp;
              <span>33</span>
            </p>
            <p>
              <span class="heading">Возрастная категория: </span>
              &nbsp;
              <span>до 12 лет</span>
            </p>
            <p>
              <span class="heading">Номинация: </span>
              &nbsp;
              <span>компьютерные игры</span>
            </p>

            <div class="bottom d-flex flex-row align-items-center justify-content-end">
                <a class="d-flex flex-row align-items-center" onclick="like(this)">
                  <span>Мне нравится &nbsp; </span>
                  <i class="fab fa-gratipay"></i>
                </a>
            </div>
          </div> <!-- правое описание -->
        </div>
        <div class="full_description">
          <h5>Описание:</h5>
          <p class="text-justify">Игра посвящена боевым искусствам, а также всем любителям Наруто. На разных уровнях запрограммированы разные техники боя, управление по ARV. Я очень-очень старался.</p>
        </div>
        <div class="all_photos">
          <h3 class="text-orange">Дополнительные скриншоты</h3>
          <div class="d-flex flex-row align-items-center justify-content-between">
            <img src="images/works/work_example.png" alt="" height="300px">
            <img src="images/works/work_example.png" alt="" height="300px">
            <img src="images/works/work_example.png" alt="" height="300px">
          </div>
        </div>
        <div class="comments">
          <h3 class="text-orange">Комментарии</h3>
          <div class="d-flex flex-column align-items center justify-content-between">
            <div class="comment">
              <h5 class='d-flex flex-row align-items-center justify-content-between'><span>Кулакова Екатерина </span> <span class="text-orange">27.10.21</span></h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="comment">
              <h5 class='d-flex flex-row align-items-center justify-content-between'><span>Кулакова Екатерина </span> <span class="text-orange">27.10.21</span></h5>
              <h6><b>Потрясно!</b></h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div> <!-- div.comments -->

        <div class="add_comment d-flex flex-row align-items-center justify-content-around">
          <div class="small">
            <h3>Добавить комментарий</h3>
            <form class="" action="index.html" method="post">
              <input type="text" name="" value="" placeholder="Заголовок">
              <textarea name="name" rows="5" placeholder="Комментарий"></textarea>
              <button type="button" name="button">Отправить</button>
            </form>
          </div>
        </div>
      </section>
      <?php include_once 'components/footer.php'; ?>
    </div>
  </body>
</html>
