<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VMS | Visitor Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      background: #ffff;
    }

    button {
      /* margin-left: 121px; */
      border-color: none !important;
    }

    .logo {
      width: 100px;
      height: 67px;
      margin-top: 27px;
    }

    .logo2 {
      height: 100px;
      width: 80px;
      padding-top: 32px;
    }

    @media screen and (max-width: 480px) {
      .logo {
        width: 60px;
        height: 35px;
        /* margin-top: 27px; */
      }

      .logo2 {
        width: 67px;
        height: 74px;
        /* padding-top: 32px; */
      }
    }


    .another {
      background: #fff;
      /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
    }





    .services-area .services {
      background: rgb(240 247 249 / 97%);
      /* padding: 2rem 0;
      width: 23rem;
      margin: 5rem .5rem; */
      transition: box-shadow .7s ease;
      border-radius: 5%;
      /* margin-left: 23px; */

    }

    .services-area .services:hover {
      box-shadow: rgba(0, 0, 0, 0.12) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }


    .what {
      text-align: center;
    }

    .whtp {
      height: 15px;
      width: 250px;
    }



    header.header {
      margin-top: -40px;
    }

    .dev h1,
    p {
      text-align: center;
    }

    img.card2 {
      height: 236px;
      width: 335px;
    }



    /* .vmslogo {
      height: 250px;
      width: 250px;
    } */

    /* .vmslogo {
      height: 453px;
      width: 560px;
      margin-left: 70px;
    } */

    .login {
      width: 80px;
      height: 30px;
      color: #000;
      background-color: #8ecdf7;
      border-color: #2a64ab;
      border-radius: 10px;
    }

    .login a {
      padding: 0px 0px 0px 15px;
      text-decoration: none;
      color: #000;
      font-size: 18px;
    }

    .login:hover {
      background: #2a64ab;
    }

    .btn-info {
      font-size: 18px;
    }

    /* // Extra small devices (portrait phones, less than 576px)
// No media query for `xs` since this is the default in Bootstrap */

    /* // Small devices (landscape phones, 576px and up) */
    /* @media (max-width: 576px) {
      .vmslogo {
        height: 326px;
        width: 483px;
        margin-left: 37px;
      }
    } */

    /* // Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {}

    /* // Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {}

    /* // Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {

      .container,
      .container-lg,
      .container-md,
      .container-sm,
      .container-xl {
        max-width: 1200px;
      }
    }

    .nav {
      /* background: #1ea9f14f; */
    }
  </style>


</head>

<body class="dark-mode">
  <div class="nav">
    <div class="container">
      <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="logo2 img-fluid" src="assets/images/tradwave.png" alt="">
              <img class="logo img-fluid" src="assets/images/vms_logo.png" alt="">
            </a>
            <div>
            	<a href="{{route('login')}}" class="btn btn-info px-4 py-1 text-white mt-4">Login</a>
              <!-- <a type="button" class="btn btn-info px-4 py-1 text-white mt-4">Login</button> -->
            </div>


          </div>
        </nav>
      </header>
    </div>

  </div>

  <div class="container">
    <div class="another">
      <section class="about-area" id="aboutmhp">
        <h1 style="text-align: center; margin-bottom: 10px; ">Welcome To Visitor Management System</h1>
        <div class="row my-5">
          <div class="col-lg-6 col-md-12">
            <div class="about-image text-center">
              <img src="assets/images/vms_logo.png" alt="About us" class="vmslogo img-fluid">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 about-title d-flex aligm-items-center">
            <div class="paragraph d-flex flex-column justify-content-center">
              <p class="para">
                <strong>Effective Vistors & Appointment Management System</strong>
              </p>
              <p class="para">

                WELCOME guests with the beautiful simple visitor Management System that keeps your workplace safe and
                saves your team time.
              </p>
            </div>
          </div>
        </div>

      </section>

      <section class="py-5">
        <div class="banner">
          <img class="img-fluid" src="assets/images/vmscover.png" alt="" srcset="">
        </div>

      </section>

      <!-- card bar start -->

      <section class="services-area" id="services">

        <div class="container services-list">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
              <div class="services h-100">
                <div class="sevices-img text-center p-4">
                  <img class="card1 img-fluid" src="assets/images/card1.png" alt="Services-3">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-uppercase font-roboto">A Visitor Registration</h5>
                  <p class="card-text text-secondary">
                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
              <div class="services h-100">
                <div class="sevices-img text-center p-4">
                  <img class="card2 img-fluid" src="assets/images/vmsnew1.png" alt="Services-1">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-uppercase font-roboto">Visitor is Monitor</h5>
                  <p class="card-text text-secondary">
                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
              <div class="services h-100">
                <div class="sevices-img text-center p-4">
                  <img class="img-fluid" src="assets/images/card3.png" alt="Services-2">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-uppercase font-roboto">Visitor is granted Access
                  </h5>
                  <p class="card-text text-secondary">
                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- card bar end -->

      <div class="dev my-5 pt-5">
        <h1>Develop & Maintenance By:</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, minus.</p>
        <div class="text-center">
          <img class="img-fluid" src="assets/images/tradwave.png" alt="">
        </div>

      </div>

      <div class="what">
        <h1>What we offer?</h1>
        <p>Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, <br> ullamcorper
          malesuada. Eleifend condimentum id viverra nulla.</p>
      </div>

      <!-- offer card start -->
      <div class="container">
        <section class="services-area" id="services">

          <div class="container services-list">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="services p-3">

                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Security</h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="services p-3">

                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Records Trail</h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="services p-3">
                  <!-- <div class="sevices-img text-center py-4">
                                    <img src="photo/card3.png" alt="Services-2">
                                </div> -->
                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Better Reception
                    </h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="services p-3">
                  <!-- <div class="sevices-img text-center py-4">
                                    <img src="photo/card3.png" alt="Services-2">
                                </div> -->
                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Reduce Queues
                    </h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>
      <!-- offer card end -->
      <div class="what mt-5 pt-5">
        <h1>Our Features</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, expedita?</p>
      </div>
      <!-- Features part start -->
      <div class="container mb-5">
        <section class="services-area" id="services">

          <div class="container services-list">
            <div class="row">
              <div class="col-lg-4 col-sm-12 mt-3">
                <div class="services p-4">

                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Notification</h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 mt-3">
                <div class="services p-4">
                  <!-- <div class="sevices-img text-center py-4">
                                    <img src="photo/card2.png" alt="Services-1">
                                </div> -->
                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Record of Visits</h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 mt-3">
                <div class="services p-4">
                  <!-- <div class="sevices-img text-center py-4">
                                    <img src="photo/card3.png" alt="Services-2">
                                </div> -->
                  <div class="card-body text-center">
                    <h5 class="card-title text-uppercase font-roboto">Visitor Authentication
                    </h5>
                    <p class="card-text text-secondary">
                      Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>
      <!-- Features Part End -->


    </div>

  </div>
  <!-- Footer -->
  <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;
              border-radius: 19px;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;border-radius: 19px;" href="#!"
          role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;border-radius: 19px;" href="#!"
          role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1"
          style="background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);border-radius: 19px;"
          href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;border-radius: 19px;" href="#!"
          role="button"><i class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;border-radius: 19px;" href="#!"
          role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgb(45 141 205)">
      © 2022 Copyright:
      <a class="text-white" href="https://www.facebook.com/mmhp.bd">TradewaveTechnology</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</body>

</html>