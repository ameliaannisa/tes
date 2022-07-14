<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SiKolog</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/styler.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/lampuuu.png" alt="" /><span>
              SiKolog
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#baca"> Membaca </a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="tes.php">
                Tes Kesehatan Mental
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>


  <!-- fruits section -->

  <section class="fruit_section layout_padding-top">
    <div id="langkah">
      <div class="container">
        <div class="row layout_padding2">
          <div class="col-md-8">
            <div class="fruit_detail-box">
              <h3>
                Main Game Funlearning
              </h3>
              <p class="mt-4 mb-5">
                Sebelum memulai sesi tes, kamu harus bermain agar kamu bisa menjawab pertanyaan yang diajukan
              </p>
              <div>
                <a href="https://drive.google.com/drive/folders/11W6N9QdwiIwHmEF0PC62sY9UBOqCzTQj" class="custom_yellow-btn">
                  Download Aplikasi
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="fruit_img-box d-flex justify-content-center align-items-center">
              <img src="images/smartphonee.png" alt="" class="" width="250px" />
            </div>
          </div>
        </div>
        <div class="row layout_padding2">
          <div class="col-md-4">
            <div class="fruit_img-box d-flex justify-content-center align-items-center">
              <img src="images/diagnosaa.png" alt="" class="" width="250px" />
            </div>
          </div>
          <div class="col-md-8 d-flex justify-content-center align-items-center">
            <div class="fruit_detail-box">
              <blockquote class="blockquote text-right">
                <h3>
                  Tes Kesehatan Mental
                </h3>
              </blockquote>
              <blockquote class="blockquote text-right">
                <p class="mt-4 mb-5">
                  Sesi ini dilakukan untuk mendiagnosa kesehatan mental yang kamu alami selama bermain game pada aplikasi Funlearningrmain game pada aplikasi Funlearning
                </p>
              </blockquote>
              <blockquote class="blockquote text-right">
                <a href="tes.php" class="custom_yellow-btn">
                  Mulai
                </a>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end fruits section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>