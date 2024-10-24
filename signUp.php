<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Assets/images/logo.png">
  <link rel="stylesheet" href="Assets/css/bootstrap.css">
  <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="Assets/css/style.css">
  <title>Self-test</title>
</head>

<body>
  <nav class="col-md-10 offset-1 navbar-brand navbar navbar-expand-lg navbar-dark fixed-top p-2 nav-color"
    data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
      <a class="navbar-brand mt-1" href="index.php" style="text-align: center; ">
        <img src="Assets/images/logo.png" width="30" class="mb-2" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-1">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
        <div class="d-lg-flex w-100 justify-content-end">
          <a href="signIn.php" class="nav-link">Sign in</a>
        </div>
      </div>
    </div>
  </nav>
  <header class="header-img" style="background-image: url(Assets/images/home-bg.jpg); height: 10rem;">
    <div>
    </div>
  </header>
  <!-- start main  -->
  <main class="mt-5 mb-5">
    <div class="container px-4 px-lg-5 mt-5 mb-5">
      <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
        <div class="col-md-10 col-lg-8 col-xl-7 mb-5">
          <div class="card shadow mt-5 mb-5">
            <div class="card-header">
              <h2 class="text-center">Sign Up</h2>
            </div>
            <form action="">
              <div class="card-body">
                <div class="form-floating border-bottom mb-3">
                  <input type="text" class="border-0 form-control" id="fullname" placeholder="Full Name" required>
                  <label for="fullname">Full Name</label>
                </div>
                <div class="form-floating border-bottom mb-3">
                  <input type="text" class="border-0 form-control" id="username" placeholder="Username" required>
                  <label for="username">Username</label>
                </div>
                <div class="form-floating border-bottom mb-3">
                  <input type="email" class="border-0 form-control" id="email" placeholder="Email" required>
                  <label for="email">Email</label>
                </div>
                <div class="form-floating border-bottom mb-3">
                  <input type="password" class="border-0 form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
                <div class="form-floating border-bottom mb-3">
                  <input type="password" class="border-0 form-control" id="confirm" placeholder="Password" required>
                  <label for="confirm">Confirm Password</label>
                </div>
              </div>
              <div class="card-footer">
                <div class="d-flex justify-content-between">
                  <a href="signIn.php">Sign In</a>
                  <input class="btn btn-dark" type="submit" value="Sign Up">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- end main  -->
  <!-- start footer -->
  <footer class="bg-dark footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 text-light mt-4 text-center">
          <img class="mb-4 pb-1" src="Assets/images/logo.png" width="40" alt="logo">
          <span class="ps-2 fs-4">Self-test</span>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Placeat, dolor natus laudantium a id adipisci officiis laborum illo quasi,
            blanditiis ex, ratione quos temporibus reprehenderit at iure? Veritatis,
            repellendus harum!</p>
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a href=""><i class="text-light fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="text-light fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="text-light fa fa-twitter"></i></a></li>
          </ul>
          <p class="text-light  font-monospace">fallow our in social media</p>
        </div>
        <div class="col-md-4 col-sm-6 text-light mt-4 text-center">
          <p class="fs-4 pb-3">our peshcation</p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam vel cumque ad accusantium reprehenderit
          ratione, provident unde sit nihil omnis iste laboriosam tempora odio ipsum mollitia voluptatum rerum
          necessitatibus consectetur?
        </div>
        <div class="col-md-4 col-sm-6 text-light mt-4 text-center">
          <span class="fs-4 pb-3">Contact</span><br><br>
          <span><i class="fa fa-phone"> :</i><a class="link-light" href=""> +93780518356</a> </span><br>
          <span><i class="fa fa-send"> :</i> <a class="link-light"
              href="mailto:shahzadahamidy1@gmail.com">shahzadahamidy1@gmail.com</a></span>
        </div>
      </div>
    </footer>
    <div class="text-center bg-black text-light pb-1 font-monospace">Powered by <span class="text-orange">Developer group</span></div>
  <script src="Assets/js/jquery.min.js"></script>
  <script src="Assets/js/bootstrap.min.js"></script>
  <script src="Assets/js/script.js"></script>
</body>

</html>