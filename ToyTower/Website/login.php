<?php
session_start();
if (isset($_SESSION['error'])) {
    echo "<script type='text/javascript'>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ToyTower</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login_style.css" />
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
                <a class="nav-link n" href="#">Categories</a>
              </li>
              <li class="nav-item nav-justified">
                <a class="nav-link" href="#">Brands</a>
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
                <a class="nav-link" href="#"
                  ><i class="fas fa-shopping-cart icon"></i
                ></a>
              </li>
              <li class="nav-item icon">
                <a class="nav-link" href="#">
                  <button class="btn btn-dark my-2 my-sm-0" type="submit">
                    Login
                  </button>
                </a>
              </li>
              <li class="nav-item icon">
                <a class="nav-link" href="#">
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

    <section id="login">
      <div class="card">
        <div class="text-center">
          <h3>Login</h3>
          <span class="abt"
            >Don't have an account? <a href="#">Create an Account</a></span
          >
        </div>
        <div class="form mt-3">
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Username" />
          </div>
          <div class="inputbox">
            <input
              type="password"
              class="form-control"
              placeholder="Password"
            />
          </div>
          <div class="mt-1">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                Remember Me
              </label>
            </div>
          </div>
          <div class="mt-4 proceed">
            <button
              class="btn btn-dark btn-block d-flex flex-row justify-content-between align-items-center"
            >
              <div class="text-right"><span>Login</span></div>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="newsletter">
      <footer class="bg-blue text-white py-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
              <h2 class="mb-4">Subscribe to Our Newsletter</h2>
              <form>
                <div class="form-group d-flex">
                  <input
                    type="email"
                    class="form-control mr-2"
                    id="email"
                    placeholder="Enter your email"
                    required
                  />
                  <button class="btn btn-dark icon" type="submit">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <section id="above-footer">
      <footer class="text-center py-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <a href="#" class="text-black mx-3">My Account</a>
              <a href="#" class="text-black mx-3">FAQ</a>
              <a href="#" class="text-black mx-3">Gift Services</a>
              <a href="#" class="text-black mx-3">About Us</a>
              <a href="#" class="text-black mx-3">Terms and Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <section id="footer">
      <footer class="bg-blue text-white text-center py-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <a href="#" class="text-white mx-3"
                ><i class="fab fa-instagram larger-icon"></i
              ></a>
              <a href="#" class="text-white mx-3"
                ><i class="fab fa-facebook larger-icon"></i
              ></a>
              <a href="#" class="text-white mx-3"
                ><i class="fab fa-youtube larger-icon"></i
              ></a>
              <a href="#" class="text-white mx-3"
                ><i class="fab fa-twitter larger-icon"></i
              ></a>
              <a href="#" class="text-white mx-3"
                ><i class="fab fa-pinterest larger-icon"></i
              ></a>
              <a href="#" class="text-white mx-3"
                ><i class="fab fa-tiktok larger-icon"></i
              ></a>
              <p>
                © 2023 ToyTower Ltd. All Rights reserved. Use of this site
                signifies your acceptance of ToyTower Website Terms and
                Conditions and Privacy Policy. <br />
                275 Rue Lakeshore Road, Sainte-Anne-de-Bellevue, QC H9X 3L9,
                Canada
              </p>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
