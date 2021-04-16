<?php
  //Very basic multi language support
  //Default language: english
  if(isset($_GET["lang"])){
    if(file_exists("lang/".$_GET["lang"].".php")){
      require_once "lang/".$_GET["lang"].".php";
    }
    else{
      require_once "lang/en.php";
    }
  }
  else{
    //Check browser language
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    require_once "lang/" . $lang . ".php"; 
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Maik Riedlsperger - <?php echo $cv; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-10 col-lg-10 me-0 px-3" href="#">Maik Riedlsperger - <?php echo $cv; ?></a>
<a class="navbar-brand col-md-2 col-lg-2 me-0 px-3" href="<?php if($currentlanguage == "en"){ echo "?lang=de"; } else { echo "?lang=en"; }?>">
  EN &nbsp; <span data-feather="toggle-<?php if($currentlanguage == "en"){ echo "left"; } else { echo "right"; } ?>"></span> &nbsp; DE
</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <?php echo $contact_info; ?>&nbsp;
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $contact; ?></span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="mailto:maik.riedlsperger@gmail.com">
              <span data-feather="mail"></span>
              maik.riedlsperger@gmail.com
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.adarkhero.de">
              <span data-feather="home"></span>
              https://www.adarkhero.de
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.google.com/maps/place/Allee+15,+27254+Siedenburg/@52.6981892,8.9470263,17z/data=!3m1!4b1!4m5!3m4!1s0x47b095506d397c87:0x8840176f02136d06!8m2!3d52.6981892!4d8.9492203">
              <span data-feather="map-pin"></span>
              Allee 15, 27254 Siedenburg
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tel:01745602838">
              <span data-feather="phone"></span>
              +49 (0)174 56 02 838
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $profile; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="star"></span>
              16.03.1995 @ Mittersill, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="move"></span>
              01.01.2017 <?php echo $move; ?>
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $school; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="toggle-left"></span>
              <?php echo $basic_sch; ?> @ Hinterglemm, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="toggle-left"></span>
              <?php echo $sec_sch; ?> @ Maishofen, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="toggle-left"></span>
              <?php echo $htl_sch; ?> @ Saalfelden, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="toggle-left"></span>
              <?php echo $it_sch; ?> @ Imst, AT
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $languages; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="volume-2"></span>
              <?php echo $mother; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="volume-1"></span>
              <?php echo $eng_hear; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="volume-1"></span>
              <?php echo $eng_write; ?>
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $other; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="key"></span>
              <?php echo $license; ?>
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $ref; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://github.com/ADarkHero">
              <span data-feather="github"></span>
              <?php echo $git; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.heldendenken.de">
              <span data-feather="activity"></span>
              <?php echo $blog; ?>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
      <h2 class="margin-top-revert">Skills</h2>
      <div class="table-responsive">
        <table class="table table-striped table-md">
          <thead>
            <tr>
              <th></th>
              <th>Info</th>
              <th><?php echo $exp; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span data-feather="code"></span></td>
              <td><b><?php echo $prog; ?></b><br>=> <?php echo $prog_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">10+ <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="image"></span></td>
              <td><b><?php echo $pic; ?></b><br>=> <?php echo $pic_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">5 <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="shopping-cart"></span></td>
              <td><b><?php echo $online; ?></b><br>=> <?php echo $online_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">3 <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="file-text"></span></td>
              <td><b><?php echo $text; ?></b><br>=> <?php echo $text_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">2 <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

    <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
      <h2><?php echo $w_exp; ?></h2>
      <div class="table-responsive">
        <table class="table table-striped table-md">
          <thead>
            <tr>
              <th></th>
              <th><?php echo $date; ?></th>
              <th>Info</th>
              <th><?php echo $exp; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span data-feather="toggle-left"></span></td>
              <td>07-2011<br>09-2011</td>
              <td><b><?php echo $seebacher; ?></b><br>@ Seebacher Group, Saalfelden AT</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="toggle-left"></span></td>
              <td>07-2012<br>08-2012</td>
              <td><b><?php echo $seebacher; ?></b><br>@ Seebacher Group, Saalfelden AT</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="toggle-left"></span></td>
              <td>08-2015<br>04-2016</td>
              <td><b><?php echo $heidi; ?></b><br>@ Heidis Landhaus, Hinterglemm AT</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="toggle-left"></span></td>
              <td>05-2016<br>01-2017</td>
              <td><b><?php echo $klinik; ?></b><br>@ Tauernklinikum, Zell am See AT</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="toggle-right"></span></td>
              <td>07-2017<br>??-????</td>
              <td><b><?php echo $loechel; ?></b><br>@ Löchel Industriebedarf, Sulingen DE</td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">4+ <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><span data-feather="help-circle"></span></td>
              <td>??-????<br>??-????</td>
              <td><b><?php echo $future; ?></b><br>@ <?php echo $future_info; ?></td>
            </tr>
          </tbody>
        </table>

        <footer class="footer mt-auto py-3 bg-light">
          <div class="container">
            <span class="text-muted">
              Made with ❤ (and Bootstrap & Feathericons) by <a target="_blank" href="https://www.adarkhero.de">Maik Riedlsperger</a><br>
              Background image by <a target="_blank" href="https://pixabay.com/de/illustrations/ananas-wassermelone-obst-kalk-2201631/">mitosue</a>
            </span>
          </div>
        </footer>
  
</div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script>(function () { feather.replace() })()</script>
  </body>
</html>
