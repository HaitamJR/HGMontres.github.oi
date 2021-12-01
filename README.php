<?php 
	$con=mysqli_connect('127.0.0.1','root','','watches') or die(mysqli_error($con));
  $query="SELECT * from models";
  $result=mysqli_query($con,$query) or die(mysqli_error($con));
  $rows=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>HG Montre</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link rel="shortcut icon" type="image/x-icon"href="assets/img/favicons/logo.jpg">
    <link rel="manifest" href="assets/img/favicons/logo.jpg">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <style>
      #ref{
        margin-top:-10px;
      }
    </style>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="index.php"><img src="assets/img/favicons/logo.jpg" width="35px"><span class="text-light fs-2 fw-bold ms-2">HG MONTRE</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="inde-fr.php">ACCUEIL</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="#store">BOUTIQUE</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="brands-fr.php">MARQUES</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-bold" href="#contact">CONTACT</a></li>
            </ul>
            <form class="d-flex"><a class="text-primary" href="#!">
                <svg class="feather feather-phone-call" xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg></a>
              <div class="ms-4 text-light fw-bold">1 (800) 862 6772 </div>
              &nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;<a class="ms-4 text-light fw-bold" href="store.php">English</a>
            </form>
          </div>
        </div>
      </nav>
      <section class="py-0" id="header">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/header-bg.png);background-position:right top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container" id="watch">
          <div class="row align-items-center min-vh-75 min-vh-xl-100">
            <div class="col-md-8 col-lg-6 text-md-start text-center">
              <h1 class="display-1 lh-sm text-uppercase text-light">Welcome to Shop</h1>
            </div>
          </div>
        </div>
      </section>
      
      <section class="py-0 pb-6" id="store">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mt-7">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Boutique</h5><br>
            </div>
            <div class="col-12">
              <?php 
                $query2="SELECT m.* , b.*  from  models m, brands b where m.idBrands = b.idBrands";
                $result=mysqli_query($con,$query2) or die(mysqli_error($con));
                $rows2=mysqli_fetch_all($result, MYSQLI_ASSOC);
              ?>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                  <div class="carousel slide" id="carouselLatest" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-70 align-items-center">
                          <?php foreach($rows2 as $row): ?>
                          <div class="col-sm-2 col-md-4 mb-2 mb-md-0" id="tab-content">
                            <div class="card bg-black text-white p-2 pb-9"><img class="card-img" src="<?php echo $row['photoModels'] ?>" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                <h6 class="text-primary"><?php echo $row['prixModels'] ?>$</h6>
                                <h4 class="text-light" id="ref"><?php echo $row['refModels'] ?></h4>
                                <h4 class="text-light"><?php echo $row['nomBrands'] ?></h4>
                                <h2 class="text-light"><?php echo $row['nomModels'] ?></h2>
                                <h5 class="text-primary"><?php echo $row['situation'] ?></h5>
                              </div>
                          </div><br>
                          </div><?php endforeach ?>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6 bg-dark" id="brands">
      <?php 
                $query3="SELECT * from collectionBrands";
                $result=mysqli_query($con,$query3) or die(mysqli_error($con));
                $rows3=mysqli_fetch_all($result, MYSQLI_ASSOC);
              ?>
        <div class="container">
          <div class="row">
            <?php foreach($rows3 as $row): ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-sm-2 col-lg-2 mb-2 mb-lg-0 d-flex flex-center"><img src="<?php echo $row['photoBrands'] ?>" alt="" /></div><br>
            
            <?php endforeach ?>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pt-7" id="contact">

        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-4 col-xl-3 mb-3">
              <h4 class="lh-lg fw-bold text-light">CONTACT</h4>
            </div>
            <div class="col-6 col-sm-4 col-xl-3 mb-3">
              
            </div>
            <div class="col-6 col-sm-4 col-xl-3 mb-3">
              
            </div>
            <div class="col-12 col-xl-3">
              <h5 class="lh-lg fw-bold text-light text-uppercase"></h5>
              <div class="row input-group-icon mb-5">
              <div class="col-md-6">
              </div>
              </div>
            </div>
          </div>
          <div class="border-bottom border-700"></div>
          <div class="row flex-center my-3">
            <div class="col-md-6 order-1 order-md-0">
            <h4 class="lh-lg fw-bold text-light">HG MONTRES</h4>
            </div>
            <div class="col-md-6">
              <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="https://www.instagram.com/hg.montres/"> <span class="me-4" data-feather="instagram"></span></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
  </body>

</html>
