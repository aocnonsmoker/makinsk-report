<html lang="en">
  <head>
    <title>Система отчетности Макинск</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css"> 
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.php">Рахмет</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php">Главное</a></li>
              <li><a href="meruert.php" class="nav-link active">Меруерт</a></li>
              <li><a href="rahmet.html">Рахмет</a></li>
              <li><a href="communal.html">Коммунальные услуги</a></li>
              <li><a href="transport.html">Транспорт</a></li>
              <li><a href="db/register.html">Зарегистрироваться</a></li>
            </ul>
          </nav>
          <div class="right-cta-menu text-right d-flex aligin-items-right col-6">
            <div class="ml-auto">
            </div>
            <a href="" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <section class="section-hero overlay bg-light" style="background-image: url('images/hero_1.jpg');" id="home-section">
    </section>

    <section class="m-3">
      <div class="container">
        <hr>
        <div class="accordion" id="accordionExample">
  <div class="card resource">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Сырье
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table" id="resources">
          <thead>
            <tr>
              <th scope="col">Наименование сырья</th>
              <th scope="col">В наличии</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = mysqli_connect("srv-pleskdb23.ps.kz", "rahme_login", "nonsmoker123", "rahmetm1_login");
            if (mysqli_connect_error()) {
              die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
            } else {
              $sql = "SELECT name, count FROM resources";
              $result = $conn-> query($sql);

              if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                  echo "<tr><td>". $row["name"] ."</td><td>". $row["count"] ."</td></tr>";
                }
              } else {
                echo "Нет записей";
              }
            }
            $conn -> close();
            ?>
            <tr class="addLineResource">
              <form action="save/saveResource.php" method="POST">
                <td>
                  <input type="text" placeholder="Введите название сырья" name="name" /><br>
                  <button type="submit" class="btn btn-success saveButton" style="margin-top: 10px;">Сохранить</button>
                </td>
                <td>
                  <input type="text" placeholder="Введите кол. и ед. измерения" name="count" />
                </td>
              </form>
            </tr>
            <tr>
              <td>
                <button class="btn btn-primary" onclick="addResource()">Добавить запись</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card production">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Готовая продукция
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">01.04.2020</th>
              <th scope="col">Наименование продукта</th>
              <th scope="col">Количество</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Бедный еврей</td>
              <td>4 кг.</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Пирог(сметанник)</td>
              <td>5 шт.</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Пирог(творожный)</td>
              <td>7 шт.</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Самса</td>
              <td>20 шт.</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Пирожные(бисквит)</td>
              <td>30 шт.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card profit">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Доход
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Наименование сырья</th>
              <th scope="col">В наличии</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Мука</td>
              <td>74 кг.</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Сахар</td>
              <td>33 кг.</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Маргарин</td>
              <td>7 кг.</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Кунжут</td>
              <td>0,5 кг.</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Масло</td>
              <td>9 л.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card order">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Заказы
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <ol>
          <li>
            Самат, +77015486415, 03.04.2020 15:30
            <ul>
              <li>Баурсак, 6 кг. х 800 тг. = 4800 тг.</li>
              <li>Торт(медовый), 2 кг. х 3000 тг. = 6000 тг.</li>
              <li>Пирожное(бисквит), 20 шт. х 140 тг. = 2800 тг.</li>
              <li>Итог: 13600 тг.</li>
            </ul>
          </li>
          <li>
            Самат, +77015486415, 03.04.2020 15:30
            <ul>
              <li>Баурсак, 6 кг. х 800 тг. = 4800 тг.</li>
              <li>Торт(медовый), 2 кг. х 3000 тг. = 6000 тг.</li>
              <li>Пирожное(бисквит), 20 шт. х 140 тг. = 2800 тг.</li>
              <li>Итог: 13600 тг.</li>
            </ul>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="card salary">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Зарплаты
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Наименование сырья</th>
              <th scope="col">В наличии</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Мука</td>
              <td>74 кг.</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Сахар</td>
              <td>33 кг.</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Маргарин</td>
              <td>7 кг.</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Кунжут</td>
              <td>0,5 кг.</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Масло</td>
              <td>9 л.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      $(".addLineResource").hide();
      function addResource() {
        $(".addLineResource").show();
        console.log(window);
      }
    </script>
   
   
  </body>
</html>