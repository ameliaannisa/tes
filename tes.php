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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

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
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="fruit.html">
                Selesai
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>



  <!-- contact section -->
  <style type="text/css">
    .center {
      text-align: center;
      font-size: 30px;
    }
  </style>
  <section class="layout_padding">
    <div class="container">
      <?php
      //START KONVERSI VERSI PHP KE PHP 7 OTOMATIS
      date_default_timezone_set('Asia/Jakarta');
      error_reporting(0);
      //JIKA MASIH ERROR, COBA OPSI LAIN (ADA 4 OPSI PEMANGGILAN)
      //require_once "parser-php-version.php"; OPSI 1
      //include_once "parser-php-version.php"; OPSI 2
      //require_once ("parser-php-version.php"); OPSI 3
      //include_once ("parser-php-version.php"); OPSI 4
      require_once "parser-php-version.php";
      //END KONVERSI VERSI PHP KE PHP 7 OTOMATIS

      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "spforwardbasicv1";

      mysql_connect($server, $username, $password) or die("Gagal");
      mysql_select_db($database) or die("Database tidak ditemukan");

      $answer        = $_GET['answer'];
      if ($answer != '') {
        mysql_query("INSERT INTO rule_temporary (username, pilihan, jawaban)
          VALUES ('Mycoding','$answer','$_GET[pilihan]')");
      } elseif ($_GET['pilih'] == '') {
        mysql_query("DELETE FROM rule_temporary where username='Mycoding'");
      }
      if (!$answer) $answer = 1;
      $sql2 = mysql_query("SELECT * FROM penyakit where id_penyakit='{$answer}'");
      $s = mysql_fetch_array($sql2);
      $penyakit = nl2br($s['penyakit']);
      $keterangan = nl2br($s['ket']);
      $solusi = nl2br($s['sol']);

      $result = mysql_query("SELECT * FROM gejala where id='{$answer}'");
      if (mysql_num_rows($result)) {
        $row         = mysql_fetch_array($result);
        $pertanyaan = nl2br($row['pertanyaan']);
        echo ("");
        echo ("<br><br><br><p class='center'><br/><span style=' font-size:30px; color: #000;'>" . $pertanyaan . "</span></p>");
        echo ("<br/><br/>");
        if ($row['ifyes'] != "0" && $row['ifno'] != "0") {

          echo ("<p class='center'><div class='d-flex justify-content-center'><a class='custom_red-btn' class='jawab' href=\"?pilih=tanya&pilihan=Y&answer={$row['ifyes']}\">Ya</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='custom_yellow-btn' class='jawab' href=\"?pilih=tanya&pilihan=N&answer={$row['ifno']}\">Tidak</a></div></p><br>
          <br>
          <br>");
        } else {
          echo "";
        }
      }

      if ($s['ifyes'] == "0" && $s['ifno'] == "0") {
        echo ("<br/><p class='center'><span style=' font-size:30px; color: #000;'><b>Hasil Konsultasi :</b></p>");
        echo ("<p class='center'><span style=' font-size:50px; color: #FF3300;'>" . $penyakit . "</span></p>");
        echo ("<br/><span style=' font-size:20px; color: #000;'><b>Keterangan :</b><br> ");
        echo ("<span style=' color: style='color:red'>" . $keterangan . "</span>");
        echo ("<br/><br/><span style=' font-size:20px; color: #000;'><b>Solusi :</b><br> ");
        echo ("<span style=' color: style='color:red'>" . $solusi . "</span>");
        echo "<br><br><p class='center'><div class='d-flex justify-content-center'><a class='custom_yellow-btn' href='tes.php'>Coba Lagi</a></div></p></span>";
        echo "";
      } else {
        echo "";
      }
      ?>
    </div>
  </section>
  <!-- end contact section -->

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

</body>

</html>