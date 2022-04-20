<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/style3.css">
    <title>Dine</title>
</head>

<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="../Images/logo (1).png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active nav1" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/rooms.php">Rooms and Suite</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/dine.php">Dine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/enjoy.php">Enjoy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/contact.php">Contact</a>
          </li>
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="../PHP/register.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="../PHP/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

    <!-- Main Container -->
    <div class="hotel-pg common">
        <div class="inner-bg">

        </div>
        <div class="container">
            <div class="main">
                <div class="room-thumb img-left" id="banana-leaf">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-holder">
                                <img src="../Images/banana-thumb.jpg" alt="Banana Thumb">
                            </div>
                        </div>
                        <div class="col-md-6 leaf">
                            <div class="text-holder">
                                <h2 class="title">Banana Leaf Restaurant</h2>
                                <p>
                                    This dining restaurant is situated in the first floor of the main hotel building. The interior design of this restaurant is beautiful. It serves many different types of Chinese, Indian, Continental and Thai cuisine.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-thumb img-right" id="tea-valley">
                    <div class="row">
                        <div class="col-md-6 leaf">
                            <div class="text-holder">
                                <h2 class="title">Tea Valley Restaurant</h2>
                                <p>
                                This half-moon shaped restaurant on the slopes of a small is 
                                made of wooden frame with thick thatch roof. The speciality of this restaurant is they have live kitchen where the guests can see the environment of the kitchen and how the food is cooked. They also serve differnet kinds of Bangladeshi and Indian cuisine.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-holder">
                                <img src="../Images/tea-valley.jpg" alt="Tea Valley">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-thumb img-left" id="forest-pub">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-holder">
                                <img src="../Images/forest-pub.jpg" alt="Forest Pub">
                            </div>
                        </div>
                        <div class="col-md-6 leaf">
                            <div class="text-holder">
                                <h2 class="title">Forest Pub</h2>
                                <p>
                                The Bar of the resort  serves different 
                                kinds of cocktails, mocktails, Beers, Red & White Wines.
                                
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-thumb img-right" id="pool-cafe">
                    <div class="row">
                        <div class="col-md-6 leaf">
                            <div class="text-holder">
                                <h2 class="title">The Pool Cafe</h2>
                                <p>
                                The cool and beautiful pool which will attract any tourists. It serves snacks,soft drinks and juices.The guests can also sit and rest beside the pool to enjoy the view.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-holder">
                                <img src="../Images/pool-cafe.jpg" alt="Pool Cafe">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-thumb img-left" id="the-garden-lounge">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-holder">
                                <img src="../Images/the-garden-lounge-thumb.jpg" alt="The Garden Lounge">
                            </div>
                        </div>
                        <div class="col-md-6 leaf">
                            <div class="text-holder">
                                <h2 class="title">The Garden Lounge</h2>
                                <p>
                               This lounge is specially designed so the guests can enjoy their evening time having some snacks , tea or coffee.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-thumb img-right" id="lobby-cafe">
                    <div class="row">
                        <div class="col-md-6 leaf">
                            <div class="text-holder">
                                <h2 class="title">The Lobby Café</h2>
                                <p>
                                     This cafe is situated in the ground floor of the main hotel building.It serves soft drinks, juices and differnt types of cuisine.  
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-holder">
                                <img src="../Images/loby-cafe.jpg" alt="Lobby Cafe">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <p>Konapara, Saint Martin Bangladesh. Phone: +880 9876445, Hotline: +880 179628068</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>