<?php echo $this->render('headers/brands_header.html',NULL,get_defined_vars(),0); ?>
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

  <?php foreach (($brands?:[]) as $b): ?>
    <section id="toy-brands">
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="<?= ($b['BrandImage']) ?>"
                alt="Disney"
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title"><?= ($b['BrandName']) ?></h2>
                  <p class="card__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Rerum in labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card__button">See More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  <?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?></include
>
