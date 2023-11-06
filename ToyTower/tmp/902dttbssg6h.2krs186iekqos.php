<?php echo $this->render('headers/categories_header.php',NULL,get_defined_vars(),0); ?>
    <div class="container mt-5">
      <div class="row">
        <!-- Repeat will pull each Category from the db -->
        <?php foreach (($categories?:[]) as $c): ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="<?= ($c['CategoryImage']) ?>"
                alt=""
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title"><?= ($c['CategoryName']) ?></h2>
                  <p class="card__description">
                    <?= ($c['Descript'])."
" ?>
                  </p>
                </div>
                <a
                  class="card__button"
                  href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ($c['CategoryID']) ?>"
                  >See More</a
                >
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?></include
>
