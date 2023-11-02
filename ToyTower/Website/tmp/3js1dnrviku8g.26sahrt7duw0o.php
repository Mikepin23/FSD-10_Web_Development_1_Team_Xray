<?php echo $this->render('headers/toys_header.php',NULL,get_defined_vars(),0); ?>
    <div class="row">
      <?php foreach (($toys?:[]) as $t): ?>
        <div class="col-md-3 col-sm-6">
          <div class="product-grid">
            <div class="product-image">
              <img class="pic-1" src="<?= ($t['ToyImage']) ?>" />
            </div>
            <div class="product-content">
              <h3 class="title"><?= ($t['ToyName']) ?></h3>
              <div class="price">$<?= ($t['Price']) ?></div>
              <a class="add-to-cart" href="#">add to cart</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?></include
>
