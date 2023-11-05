<?php echo $this->render('headers/brands_header.html',NULL,get_defined_vars(),0); ?>
    <div class="container mt-5">
      <div class="row">
        <?php foreach (($brands?:[]) as $b): ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="<?= ($b['BrandImage']) ?>"
                alt=""
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title"><?= ($b['BrandName']) ?></h2>
                  <p class="card__description">
                    <?= ($b['Descript'])."
" ?>
                  </p>
                </div>
                <a
                  class="card__button"
                  href="<?= ($BASE) ?><?= (Base::instance()->alias('toyRead')) ?>"
                  >See More</a
                >
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?></include
>
