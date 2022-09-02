<!doctype html>
  <html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, World!</title>
  </head>

  <body id="page-top">


    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand font-weight-bold text-white" href="#page-top">Athena Studio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
                        <a class="nav-link js-scroll-tigger text-white" href="#">JOIN <span class="sr-only">(current)</span></a>
                    </li>
            <li class="nav-item">
                        <a class="nav-link js-scroll-tigger text-white" href="#">SIGN IN</a>
                    </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#other" role="button" data-toggle="dropdown" aria-expanded="false">
                OTHER
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">CONTACT US</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">FORUM</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="tabelUser.php">TABEL USER</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">MONETIZE MY ART</a></li>
              </ul>
            </li>
            <li class="nav-item">
                        <a class="nav-link js-scroll-tigger text-white" href="#whats_new">WHATS NEW</a>
                    </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-tigger text-white" href="sessionLoginForm.html ">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4"> MORE WITH <br> <span class="font-weight-bold">US</span></h1>
        <hr class="'my-4">
        <p class="lead">Kami tahu pasti cara mengoptimasi bisnis anda di Era Digital. Hubungi kami untuk konsultasi & informasi lebih lanjut.</p>
        <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KONSULTASI GRATIS</a>
      </div>
    </div>
    </br>

    <div class="container text-center">
      <div class="testi text-center">
        <h1> Layanan Desain Jasa Desain kami</h1>
      </div>
      <div class="card1">
        <img class="menuimg" src="image/1.png" alt="menu">
        <div class="card-body">

          <p class="card-text">Desain logo untuk kebutuhan usaha dan pemasaran produk atau perusahaan</p>
          <a href="#" class="btn btn-primary">Lebih Lanjut</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <img class="menuimg" src="image/2.png" alt="menu">
          <p class="card-text"> Desain website terima jadi dengan desain berkualitas dan cepat untuk mengembangkan usaha anda </p>
          <a href="#" class="btn btn-primary">Lebih Lanjut</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <img class="menuimg" src="image/3.png" alt="menu">
          <p class="card-text">Kami juga melayani berbagai kebutuhan desain kustom untuk usaha anda.</p>
          <a href="#" class="btn btn-primary">Lebih Lanjut</a>
        </div>
      </div>

    </div>




    <footer class="footer bg-secondary">
      <center>
      <?php
      echo date(' d F Y'); 
      $author = ["Kelompok 7 Rahmatullah."];
      foreach($author as $editor){
      echo "<li>$editor</li>";
    }
    echo "</ul>";
    ?>
      </center>
    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      -->
    <html>

    <head>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#flip").click(function() {
            $("#panel").slideDown("slow");
          });
        });
      </script>
      <style>
        #panel,
        #flip {
          padding: 5px;
          text-align: center;
          background-color: #C0C0C0;
          border: solid 1px #ADD8E6;
        }

        #panel {
          padding: 50px;
          display: none;
          background-color: #ADD8E6;
        }
      </style>
    </head>

    <body>
      <div id="flip">Click to slide down panel</div>
      <div id="panel">
        <div class="card text-center">

          <div class="card-body">
            <h5 class="card-title">Info Lebih Lanjut</h5>
            <?php
            for ($i = 0; $i < 1; $i++) {
              echo "<h2>Maaf Sedang Maintenance</h2>";
            }
            ?> Konsultasikan kebutuhan anda dengan kami, kami dengan senang hati memberikan saran dan solusi yang tepat untuk kebutuhan anda.</< /p>
              <br>
              <a href="https://www.instagram.com/__adikusumaa/?hl=id" class="btn btn-primary">Go to My Instagram</a>
          </div>

        </div>
      </div>

    </body>

    </html>
  </body>

  </html>