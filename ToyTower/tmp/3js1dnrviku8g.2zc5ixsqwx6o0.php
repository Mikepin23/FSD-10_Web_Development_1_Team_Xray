<?php echo $this->render('headers/brands_header.php',NULL,get_defined_vars(),0); ?>
    <div class="container mt-5">
      <div class="row">
        <?php foreach (($ageranges?:[]) as $a): ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img
                class="card__background"
                src="<?= ($a['AgeRangeImage']) ?>"
                alt=""
              />
              <div class="card__content | flow">
                <div class="card__content--container | flow">
                  <h2 class="card__title"><?= ($a['Range']) ?></h2>
                  <p class="card__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Rerum in labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <a
                  class="card__button"
                  href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadAgeRanges')) ?>?ageRangeID=<?= ($a['AgeRangeID']) ?>"
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
