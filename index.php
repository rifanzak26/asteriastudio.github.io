<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asteria Studio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <?php
$servername = "localhost";
$database = "produk";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
};
?>
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" width=90px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#produk">Produk</a>
                <a class="nav-link" href="#profil">Profil</a>
            </div>
            </div>
        </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bgV2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Apakah Lilin Aromaterapi?</h5>
        <p>Lilin aromaterapi adalah lilin yang mengandung bahan pewangi yang dapat digunakan sebagai refreshing, relaxing dan menyembuhkan sakit kepala. Lilin Aromaterapi dapat digunakan untuk berbagai tujuan, termasuk menghilangkan stres dan kecemasan.

</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Manfaat Aromaterapi</h5>
        <p>Membuat tubuh dan pikiran menjadi santai. Meningkatkan kualitas tidur dan membantu meringankan insomnia. Meringankan rasa sakit, seperti nyeri haid, nyeri akibat batu ginjal, atau nyeri pada osteoartritis. Membantu mengurangi stres. Selain aromaterapi membuat tubuh rileks, ternyata wangi ini juga bisa mengusir nyamuk.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <h1 id="our-products" class="mt-5"><strong> Our Products</strong></h1>
  <div id="card-container" class="container">
  <?php $query = mysqli_query($conn,"SELECT * FROM produk");
while ( $p = mysqli_fetch_assoc($query)) :
 ?>
    <div class="card text-bg-dark mt-5" style="width: 18rem;">
      <img src="img/product/<?= $p['gambar']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <?= $p['produk'];?></h5>
          <p class="card-text"><?= $p['ukuran'];?></p>
          <h5 class="card-text"><?="Rp. ", $p['harga IDR'];?></h5>
          <h5 class="card-text"><?="$ ", $p['harga USD'];?></h5>
          <a href="#" class="btn btn-primary" id="produk">Beli lewat Shopee</a>
        </div>  
      </div>  
    <?php endwhile; ?> 
  </div>
  </div>
  <div class="container">
    <h1 class="founders">Founders</h1>
    <img class="founders-photo" src="img/founders/Raisyah.jpg" alt="">
    <h3 class="founders">Raisyah T Alletta</h3>
    <img class="founders-photo" src="img/founders/baby.png" alt="">
    <h3 class="founders" id="profil">Hervira Baby Risky</h3>
  </div>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Asteria Studio
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#produk" class="text-reset">Scented Candle</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            ask.asteriastudio@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +62 8969 6013 655</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href=#>PT Asteria Creative International</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>