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

    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

  </head>
  <body>
    

<!-- Header -->
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-12 col-sm-6 col-md-10 col-lg-10 me-0 px-3 text-center-sm" href="#">Maik Riedlsperger - <?php echo $cv; ?></a>
<a class="navbar-brand hide-print col-12 col-sm-2 col-md-2 col-lg-2 me-0 px-3 text-right text-center-sm" href="<?php if($currentlanguage == "en"){ echo "?lang=de"; } else { echo "?lang=en"; }?>">
  EN <i class="fas fa-toggle-<?php if($currentlanguage == "en"){ echo "off"; } else { echo "on"; } ?>"></i> DE
</a>
  <button class="col-12 col-sm-4 hide-print text-right navbar-toggler d-md-none collapsed text-center-sm" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" 
  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation" id="menuButton">
    <?php echo $contact_info; ?>&nbsp;
    <span class="navbar-toggler-icon"></span>
  </button>
</header>


<!-- Sidebar -->
<!-- Sidebar: Contact -->


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
              <i class="far fa-envelope"></i>
              maik.riedlsperger@gmail.com
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.adarkhero.de">
              <i class="fas fa-globe-europe"></i>
              https://www.adarkhero.de
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.google.com/maps/place/Allee+15,+27254+Siedenburg/@52.6981892,8.9470263,17z/data=!3m1!4b1!4m5!3m4!1s0x47b095506d397c87:0x8840176f02136d06!8m2!3d52.6981892!4d8.9492203">
              <i class="fas fa-home"></i>
              Allee 15, 27254 Siedenburg
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tel:01745602838">
            <i class="fas fa-mobile"></i>
              +49 (0)174 56 02 838
            </a>
          </li>
        </ul>


<!-- Sidebar: Profile -->


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $profile; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="far fa-star"></i>
              16.03.1995 @ Mittersill, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-expand-arrows-alt"></i>
              01.01.2017 <?php echo $move; ?>
            </a>
          </li>
        </ul>


<!-- Sidebar: School -->


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $school; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.vs-wiesern.salzburg.at/">
              <i class="fas fa-toggle-off"></i>
              <?php echo $basic_sch; ?> @ Hinterglemm, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.ms-maishofen.salzburg.at/">
              <i class="fas fa-toggle-off"></i>
              <?php echo $sec_sch; ?> @ Maishofen, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="http://www.htlsaalfelden.at/">
              <i class="fas fa-toggle-off"></i>
              <?php echo $htl_sch; ?> @ Saalfelden, AT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.it-kolleg-imst.at/de/home/">
              <i class="fas fa-toggle-off"></i>
              <?php echo $it_sch; ?> @ Imst, AT
            </a>
          </li>
        </ul>


<!-- Sidebar: Languages -->


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $languages; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-volume-up"></i>
              <?php echo $mother; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-volume-down"></i>
              <?php echo $eng_hear; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-volume-down"></i>
              <?php echo $eng_write; ?>
            </a>
          </li>
        </ul>


<!-- Sidebar: Other -->


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $other; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-car-side"></i>
              <?php echo $license; ?>
            </a>
          </li>
        </ul>


<!-- Sidebar: References -->


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span><?php echo $ref; ?></span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.heldendenken.de">
            <i class="far fa-file-archive"></i>
              <?php echo $blog; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://github.com/ADarkHero">
            <i class="far fa-file-code"></i>
              <?php echo $git; ?>
            </a>
          </li>
        </ul>
      </div>
    </nav>


<!-- Skills -->


    <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
      <h2 class="margin-top-revert">Skills</h2>
      <div class="table">
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
              <td><i class="fas fa-code"></i></td>
              <td><b><?php echo $prog; ?></b><br>=> <?php echo $prog_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-success" role="progressbar" style="width: 100%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer"><?php echo calcYears("2009-08-01"); ?> <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-photo-video"></i></td>
              <td><b><?php echo $pic; ?></b><br>=> <?php echo $pic_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-success" role="progressbar" style="width: <?php echo calcYears("2016-01-01")*10; ?>%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer"><?php echo calcYears("2016-01-01"); ?> <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-store"></i></td>
              <td><b><?php echo $online; ?></b><br>=> <?php echo $online_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-success" role="progressbar" style="width: <?php echo calcYears("2017-07-01")*10; ?>%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer"><?php echo calcYears("2017-07-01"); ?> <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="far fa-newspaper"></i></td>
              <td><b><?php echo $text; ?></b><br>=> <?php echo $text_info; ?></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-success" role="progressbar" style="width: <?php echo calcYears("2017-07-01")*10; ?>%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer"><?php echo calcYears("2017-12-01"); ?> <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>


<!-- Experience -->


    <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
      <h2><?php echo $w_exp; ?></h2>
      <div class="table">
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
              <td><i class="fas fa-toggle-off"></i></td>
              <td>07-2011<br>09-2011</td>
              <td><b><?php echo $seebacher; ?></b><br>@ <a target="_blank" href="http://www.seebacher-group.at/">Seebacher Group, Saalfelden AT</a></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-warning" role="progressbar" style="width: 5%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-toggle-off"></i></td>
              <td>07-2012<br>08-2012</td>
              <td><b><?php echo $seebacher; ?></b><br>@ <a target="_blank" href="http://www.seebacher-group.at/">Seebacher Group, Saalfelden AT</a></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-warning" role="progressbar" style="width: 5%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-toggle-off"></i></td>
              <td>08-2015<br>04-2016</td>
              <td><b><?php echo $heidi; ?></b><br>@ Heidis Landhaus, Hinterglemm AT</td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-warning" role="progressbar" style="width: 10%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-toggle-off"></i></td>
              <td>05-2016<br>01-2017</td>
              <td><b><?php echo $klinik; ?></b><br>@ <a target="_blank" href="https://www.tauernklinikum.at/">Tauernklinikum, Zell am See AT</a></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-warning" role="progressbar" style="width: 10%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer">< 1 <?php echo $year; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-toggle-on"></i></td>
              <td>07-2017<br>??-????</td>
              <td><b><?php echo $loechel; ?></b><br>@ <a target="_blank" href="https://www.loechel-industriebedarf.de/">Löchel Industriebedarf, Sulingen DE</a></td>
              <td>
                <div class="progress">
                  <div class="progress-bar-striped bg-success" role="progressbar" style="width: <?php echo calcYears("2017-07-01")*10; ?>%;"></div>
                </div>
                <blockquote class="text-right">
                  <footer class="blockquote-footer"><?php echo calcYears("2017-07-01"); ?> <?php echo $years; ?></footer>
                </blockquote>
              </td>
            </tr>
            <tr>
              <td><i class="far fa-question-circle"></i></td>
              <td>??-????<br>??-????</td>
              <td><b><?php echo $future; ?></b><br>@ <?php echo $future_info; ?></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>



<!-- Footer -->



        <footer class="footer mt-auto py-3 bg-light">
          <div class="container col-12 col-md-10">
            <span class="text-muted">
              Made with ❤ (and Bootstrap & Font Awesome) by <a target="_blank" href="https://www.adarkhero.de">Maik Riedlsperger</a><br>
              Background image by <a target="_blank" href="https://pixabay.com/de/illustrations/ananas-wassermelone-obst-kalk-2201631/">mitosue</a><br>
              <button onclick="javascript:window.print();" class="btn btn-outline-primary btn-sm hide-print"><?php echo $print; ?></button>
            </span>
          </div>
        </footer>
  



<!-- JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
  function calcYears($date){
    $new_date = new DateTime($date);
    $today = new DateTime();
    $interval = $today->diff($new_date);
    $years = $interval->format('%y');
    $months = $interval->format('%m');
    $monthcal = intval($months/12*10);
    return $years . '.' . $monthcal;
  }