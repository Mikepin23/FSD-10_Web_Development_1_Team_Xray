<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= ($pageTitle) ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/homepage_style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <script src="homepage.js"></script>
    <link rel="stylesheet" href="css/categories_style.css" />
    <link rel="stylesheet" href="css/brands_style.css" />
    <link rel="stylesheet" href="css/toys_style.css" />
    <link rel="stylesheet" href="css/cart_style.css" />
    <link rel="stylesheet" href="css/login_style.css" />
    <link rel="stylesheet" href="css/createAccount_style.css" />
  
    <!-- Bootstrap CSS Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome CSS Link -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <section id="logo" class="bg-blue">
      <div class="container d-flex justify-content-center align-items-center">
        <a class="navbar-logo" href="#">
          <img
            src="img/logo/ToyTowerLogo.png"
            alt="ToyTower Logo"
            height="200px"
          />
        </a>
      </div>
    </section>

    <section id="navigation">
      <nav
        class="navbar navbar-expand-lg navbar-light text-center justify-content-evenly"
      >
        <div class="container ml-auto">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <!-- <li class="nav-item">
                <a class="navbar-logo" href="#">
                  <img
                    src="img\ToyTower_Logo(3).png"
                    alt="ToyTower Logo"
                    height="100px"
                  />
                </a>
              </li> -->
              <li class="nav-item nav-justified">
                <a class="nav-link n" href="<?= ($BASE) ?><?= (Base::instance()->alias('catRead')) ?>">Categories</a>
              </li>
              <li class="nav-item nav-justified">
                <a class="nav-link" href="<?= ($BASE) ?><?= (Base::instance()->alias('brandRead')) ?>">Brands</a>
              </li>
              <li class="nav-item nav-justified">
                <a class="nav-link" href="#">Top Toys</a>
              </li>
              <li class="nav-item nav-justified">
                <a class="nav-link" href="#">Deals</a>
              </li>
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                  <div class="input-group">
                    <input
                      class="form-control mr-sm-2"
                      type="search"
                      placeholder="Search"
                      aria-label="Search"
                    />
                    <button class="btn btn-dark" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?= ($BASE) ?><?= (Base::instance()->alias('cartRead')) ?>"
                  ><i class="fas fa-shopping-cart icon"></i
                ></a>
              </li>
              <li class="nav-item icon">
                <a class="nav-link" href="<?= ($BASE) ?><?= (Base::instance()->alias('loginRead')) ?>">
                  <button class="btn btn-dark my-2 my-sm-0" type="submit">
                    Login
                  </button>
                </a>
              </li>
              <li class="nav-item icon">
                <a class="nav-link" href="<?= ($BASE) ?><?= (Base::instance()->alias('signUpRead')) ?>">
                  <button class="btn btn-dark my-2 my-sm-0" type="submit">
                    Sign Up
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
  </body>
</html>