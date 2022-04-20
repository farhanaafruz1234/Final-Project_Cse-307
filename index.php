<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <title>Homepage</title>
  <link rel="stylesheet" href="./CSS/style3.css">
  
</head>

<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="./Images/logo (1).png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active nav1" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="./PHP/rooms.php">Rooms and Suite</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active nav2" href="./PHP/dine.php">Dine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="./PHP/enjoy.php">Enjoy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="./PHP/contact.php">Contact</a>
          </li>
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="./PHP/register.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="./PHP/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Carousel -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./Images/banner2.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption d-none d-md-block">
          <h1>Neel Digante Resort</h1>
          <p>The most exotic resort in Bangladesh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Images/banner3.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption d-none d-md-block">
          <h1>Neel Digante Resort</h1>
          <p>The most exotic resort in Bangladesh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Images/banner4.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption d-none d-md-block">
          <h1>Neel Digante Resort</h1>
          <p>The most exotic resort in Bangladesh</p>
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
  </div>
   <!-- Container -->

   <div class="container-fluid first">
    <div class="row f">
      <div class="col-md-6">
        <h3>
          Neel Digante Resort is the first world class 5 star standard boutique Villa Resort & Spa at Saintmartin.
        </h3>
        <hr>
        <p>
          Neel Digante Resort is one of the most exquisite beach resorts on the St. Martin’s Island offering guests a calming respite from the city. You are cordially invited to relax and rejuvenate with sea’s lush greenery, glittering sands and coral rocks just a few steps ahead of the resort. It is in the western part of the island where fascinating sights and sounds abound within close proximity to Neel Digante. 
        </p>
        <a class="learn" href="https://www.dusairesorts.com/why-us" target="_blank" rel="noopener noreferrer">Learn more</a>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 570px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./Images/award.jpg" class="img-fluid rounded-start award" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Awards & Accolades</h5>
                <h6 class="card-text">American Architecture Prize</h6>
                <p class="card-text">World Luxury Hotel Awards, one of the two international hotel categorisation body, has awarded on 2nd December 2017.</p>
                <a class="learn" href="https://www.neeldiganteresorts.com/awards-accolades" target="_blank" rel="noopener noreferrer">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 i1">
        <a href="./PHP/rooms.php">
          <div class="i3">
            <h2 class="rooms">Rooms & Suites</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6 i2">
        <a href="./PHP/dine.php">
          <div class="i3">
            <h2 class="rooms">Dine</h2>
          </div>
        </a>
      </div>
    </div>
  </div>

  <footer id="footer">
    <p>Konapara, Saint Martin Bangladesh. Phone: +880 9876445, Hotline: +880 1796280682</p>
  </footer>


 
</body>

</html>

<?php 
  include "./DB/database.php";
  $conn = OpenConnection();
  $result = mysqli_query($conn,"DELETE FROM currentuser");
  CloseConnection($conn);
?>
