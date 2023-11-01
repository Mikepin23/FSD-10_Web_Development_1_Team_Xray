<?php
require './vendor/autoload.php';
include './controllers/CategoryController.php';

// Get your F3 instance. Replace this with the actual method you use to get your F3 instance.
$f3Instance = Base::instance();

// Create a new instance of CategoryController, passing the F3 instance to the constructor.
$controller = new CategoryController($f3Instance);

// Now you can call the redirectBasedOnPost method on $controller.
$controller->redirectBasedOnPost();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ToyTower</title>
    <link rel="stylesheet" href="css/style.css" />
    
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
    <link rel="stylesheet" href="css/categories_style.css" />
  </head>

  <body>
  <section id="logo" class="bg-blue">
  <div class="container d-flex justify-content-center align-items-center">
    <form method="post">
      <input type="hidden" name="logo_clicked" value="true">
        <button type="submit" class="navbar-logo" style="background-color: transparent; border: none;">
        <img
          src="img/logo/ToyTowerLogo.png"
          alt="ToyTower Logo"
          height="200px"
        />
      </button>
    </form>
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
                <form method="post">
                    <input type="submit" name="categories" class="nav-link n" value="Categories">
                </form>
            </li>
            <li class="nav-item nav-justified">
                <form method="post">
                    <input type="submit" name="popularBrands" class="nav-link" value="Popular Brands">
                </form>
            </li>
            <li class="nav-item nav-justified">
                <form method="post">
                    <input type="submit" name="topToys" class="nav-link" value="Top Toys">
                </form>
            </li>
            <li class="nav-item nav-justified">
                <form method="post">
                    <input type="submit" name="deals" class="nav-link" value="Deals">
                </form>
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

              <form method="post">
                <input type="hidden" name="cart_clicked" value="true">
                  <button class="btn btn-dark" type="submit" style="background-color: transparent; border: none;">>
                    <i class="fas fa-shopping-cart icon"></i>
                  </button>
              </form>
              <form method="post">
                <input type="hidden" name="login_clicked" value="true">
                  <button class="btn btn-dark my-2 my-sm-0" type="submit">
                  Login
                  </button>
              </form>
              </li>
              <form method="post">
              <input type="hidden" name="signup_clicked" value="true">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">
                Sign Up
                </button>
              </form>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <h1>Categories</h1>

    <!-- <section id="toy-categories" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="category1.jpg" class="card-img-top" alt="Category 1" />
              <div class="card-body">
                <h5 class="card-title">Category 1</h5>
                <p class="card-text">Description of Category 1.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="category2.jpg" class="card-img-top" alt="Category 2" />
              <div class="card-body">
                <h5 class="card-title">Category 2</h5>
                <p class="card-text">Description of Category 2.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="category3.jpg" class="card-img-top" alt="Category 3" />
              <div class="card-body">
                <h5 class="card-title">Category 3</h5>
                <p class="card-text">Description of Category 3.</p>
                <a href="#" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="toy-categories">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/actionfigs.png"
                alt="Action Figures"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Action Figures</h2>
                  <p class="card__description">
                    Get your favorite characters in your kung fu grip today! 
                    Mini models, big fun! 
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/educational.png"
                alt="Educational toys"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Educational toys</h2>
                  <p class="card__description">
                    "Games" and "toys" that teach math, reading,
                    and more, all while having "fun"!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/dolls.png"
                alt="Dolls"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Dolls</h2>
                  <p class="card__description">
                    Plastic girls in a fantasy world, dress them up, make it right,
                    they're your dollies!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/sports.png"
                alt="Sports Gear"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Sports</h2>
                  <p class="card__description">
                    More expenive gear makes you play better. Get your head in the game!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/boardgames.png"
                alt="Board Games"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Board games</h2>
                  <p class="card__description">
                    Whichever one you're playing you'll never be bored with one of these games!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/puzzles.png"
                alt="Lobster puzzle"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Puzzles</h2>
                  <p class="card__description">
                    Trying to solve the puzzle of what to do on a wild saturday night? Here's the solution!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/stuffedanimals.png"
                alt="Stuffed animals"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Stuffed Animals</h2>
                  <p class="card__description">
                    Outsourcing physical affection for children has never been so cute!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/artsncrafts.png"
                alt="Art supplies"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Arts & Crafts</h2>
                  <p class="card__description">
                    Create to your heart's content! As long as it stays within the lines of course.
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/Electronics.png"
                alt="Electronic toys"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Electronics</h2>
                  <p class="card__description">
                    Because no one wants to roll a ring down a hill using stick anymore, grandpa!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="img/categories/Toddlers.png"
                alt="Toddler toys"
                width="1920"
                height="2193"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title">Toddlers</h2>
                  <p class="card__description">
                    Impossible for even the most determined of children to choke on!
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
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
