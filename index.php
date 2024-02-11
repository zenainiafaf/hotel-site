<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <title>
      Hotel
    </title>
  </head>
  <style>
    main {
     height: 100vh;
     background-image: url(../Hotel/images/photo_5913270656731037523_y.jpg);
     background-size: cover;
     background-position: center;
     background-repeat: no-repeat;
}
 h1, h2, h3, h4, p, .btn, label, input, select, option,a{
     font-family: 'Noto Sans', sans-serif !important;
}

 a{
     text-decoration: none;
     color: white;
}
 #signup{
     color: #FF731D !important;
}
 #signup:hover{
     color: white !important;
}
 .form-select{
     border: #FF731D 1px solid !important ;
     color: #FF731D;
}
 .check-avblt{
     background-color: white !important;
     border-radius: 10px;
}
 .btn{
     color: white !important;
}
  </style>
  
  <body>
    <header>
      <nav class="navbar fixed-top shadow-sm navbar-expand-md navbar-light bg-light">
        <div class="container py-1">
          <a class="navbar-brand" href="#">
            Navbar
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#room">
                  Rooms
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
            </ul>
            <div class="d-flex gap-2">
              <select class="form-select" aria-label="Default select example">
                <option selected>
                  USD
                </option>
                <option value="EUR">
                  EUR
                </option>
                <option value="DZD">
                  DZD
                </option>
              </select>
              <button class="btn btn-primary w-100 fw-normal" type="submit">
                <a href="login.php">
                  Login
                </a>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main id="home" class="pt-lg-4 d-flex justify-content-center
    align-items-center">
      <div class="container d-flex flex-column gap-4 py-5">
        <h1 class="display-1 text-center text-white fw-bolder mb-5">
          Get started your exciting
          <span style="color:#FF731D">
            journey
          </span>
          with us
        </h1>
        <form action="search.php" method="post">
        <div class="container py-3 px-4 d-flex flex-column check-avblt">
          <h3>
            Check availability
          </h3>
          <div class="row gap-2">
            <div class="col-lg-2">
              <label for="destination">
                Destination
              </label>
              <input name="destination" type="text" class="form-control" placeholder=""
              id="destination">
            </div>
            <div class="col">
              <label for="checkin">
                Check in
              </label>
              <input name="checkin" type="date" class="form-control" id="checkin">
            </div>
            <div class="col-lg-2">
              <label for="checkout">
                Check out
              </label>
              <input name="checkout" type="date" class="form-control" id="checkout">
            </div>
            <div class="col">
              <label for="adults">
                Adults
              </label>
              <input name="adults" type="number" class="form-control" id="adults">
            </div>
            <div class="col">
              <label for="children">
                Children
              </label>
              <input name="children" type="number" class="form-control" id="children">
            </div>
            <div class="col">
              <label for="rooms">
                Rooms
              </label>
              <input name="rooms" type="number" class="form-control" id="rooms">
            </div>
            <div class="col">
              <label for="sumbit">
              </label>
              <button class="btn btn-primary w-100 fw-normal" type="submit">
                Search
              </button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </main>
     <section class="py-4" id="room">
      <div class="container d-fblackflex-column gap33">
        <h1 class="text-center mb-4 a33-4">
          Exclusive
          <span class="text-primary">
            deals & discounts
          </span>
        </h1>
        <div class="row pt-3">
        <div class="col-lg-4 mb-5 d-flex justify-content-center align-items-center" style="height:420px" style="height:416.31px !important">
            <div class="card" style="width: 100% !important; box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;">
          <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/78376596.jpg?k=3ac3cbb929877d0e77b977e167b0815173e6428270b3fc8d9e751ddfafe39839&o=&hp=1" class="card-img-top" alt="...">
          <div class="card-body" style="line-height: 1;">
            <h4 class="card-title d-flex justify-content-between align-items-center fw-bold">
            Hotel Setif Plus</span> <span class="fs-6">4.8 <i class="bi bi-star-fill text-primary"></i></span>
            </h4>
            <p style="font-size: 14px; font-weight:400;"><i class="bi text-primary bi-geo-alt-fill"></i> Algeria, Setif</p>
            <h3 class="card-text text-primary fw-bold price">
            68$<span class="" style="font-size:16px; color: black; font-weight: 300;">/night</span>
            </h3>
            <p style="letter-spacing: 4px; font-size:12px; " class="text-primary d-flex justify-content-around align-items-center">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-mug-hot"></i>
              <i class="fa-solid fa-square-parking"></i>
              <i class="fa-solid fa-utensils"></i>
              <i class="fa-solid fa-person-swimming"></i>
              <i class="fa-solid fa-dumbbell"></i>
              </p>
            <a href="#" class="btn btn-primary">
              Book Now
            </a>
          </div>
          </div>
          </div>
          <div class="col-lg-4 mb-5 d-flex justify-content-center align-items-center" style="height:420px" style="height:416.31px !important">
            <div class="card" style="width: 100% !important; box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;">
          <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/226831102.jpg?k=8c489178706bb5537c78e25f5c04c05da8775096b76903ad92661422b6599ef7&o=&hp=1" class="card-img-top" alt="...">
          <div class="card-body" style="line-height: 1;">
            <h4 class="card-title d-flex justify-content-between align-items-center fw-bold">Feldmilla Design Hotel
            </span> <span class="fs-6">4.5 <i class="bi bi-star-fill text-primary"></i></span>
            </h4>
            <p style="font-size: 14px; font-weight:400;"><i class="bi text-primary bi-geo-alt-fill"></i> Italy, Campo Tures</p>
            <h3 class="card-text text-primary fw-bold price">
            246$<span class="" style="font-size:16px; color: black; font-weight: 300;">/night</span>
            </h3>
            <p style="letter-spacing: 4px; font-size:12px; " class="text-primary d-flex justify-content-around align-items-center">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-mug-hot"></i>
              <i class="fa-solid fa-square-parking"></i>
              <i class="fa-solid fa-utensils"></i>
              <i class="fa-solid fa-person-swimming"></i>
              <i class="fa-solid fa-dumbbell"></i>
              </p>
            <a href="#" class="btn btn-primary">
              Book Now
            </a>
          </div>
          </div>
          </div>
          <div class="col-lg-4 mb-5 d-flex justify-content-center align-items-center" style="height:420px">
            <div class="card" style="width: 100% !important; box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;">
          <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/457393188.jpg?k=0283c94730ff016107e662e9db6e4d64d7a60a39e45acb864d700185ea3f25fb&o=&hp=1" class="card-img-top" alt="...">
          <div class="card-body" style="line-height: 1;">
            <h4 class="card-title d-flex justify-content-between align-items-center fw-bold">
            Burj Al Arab Jumeirah</span> <span class="fs-6">4.8 <i class="bi bi-star-fill text-primary"></i></span>
            </h4>
            <p style="font-size: 14px; font-weight:400;"><i class="bi text-primary bi-geo-alt-fill"></i> Émirats arabes unis, Dubai</p>
            <h3 class="card-text text-primary fw-bold price">
            2 938$<span class="" style="font-size:16px; color: black; font-weight: 300;">/night</span>
            </h3>
              <p style="letter-spacing: 4px; font-size:12px; " class="text-primary d-flex justify-content-around align-items-center">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-mug-hot"></i>
              <i class="fa-solid fa-square-parking"></i>
              <i class="fa-solid fa-utensils"></i>
              <i class="fa-solid fa-person-swimming"></i>
              <i class="fa-solid fa-dumbbell"></i>
              </p>
            <a href="#" class="btn btn-primary">
              Book Now
            </a>
            
          </div>
          </div>
          </div>
  </div>
        </div>
    </section>
    <section id="contact" class="pb-5">
      <div class="container text-center">
        <h1 class="mb-3">Reach Us</h1>
        <div class="row text-white py-3 mx-sm-4 bs-1 bg-primary" style="font-size: 30px; border-radius:10px;">
          <div class="col">
          <i class="fa-solid fa-phone"></i> +213 555 555 555
          </div>
          <div class="col">
          |
          </div>
          <div class="col">
          <i class="fa-solid fa-envelope"></i> example@mail.com
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark text-white text-center py-3">
      <p>
        &copy; 2024 Hotel. All rights reserved.
      </p>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>

</html>
