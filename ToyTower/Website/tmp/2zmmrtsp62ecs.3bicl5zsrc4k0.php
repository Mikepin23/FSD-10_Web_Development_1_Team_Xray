<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?><!-- template header -->

  <section id="homepage-body">
    <div class="w3-content w3-display-container">
      <img
        class="mySlides"
        src="img/Carrouselpics/carrouselpic.png"
        style="width: 100%"
      />
      <img
        class="mySlides"
        src="img/Carrouselpics/jellycat.png"
        style="width: 100%"
      />
      <img
        class="mySlides"
        src="img/Carrouselpics/Standard_Banner_2_1080x.png"
        style="width: 100%"
      />
      <img
        class="mySlides"
        src="img/Carrouselpics/TRU-d-HP-LPOS_101923-en.png"
        style="width: 100%"
      />

      <img
        class="mySlides"
        src="img/Carrouselpics/TRU-hp-TopToys-d-102623-en.png"
        style="width: 100%"
      />

      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">
        &#10094;
      </button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">
        &#10095;
      </button>
    </div>

    <br />

    <div class="banner">
      <h1>Shop By Brand</h1>
    </div>

    <br />

    <div class="button-container">
      <a class="brand-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadBrands')) ?>?categoryID=<?= ('2') ?>"><img src="img/brands/barbie.png" alt="Barbie"></a>
      <a class="brand-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadBrands')) ?>?categoryID=<?= ('5') ?>"><img src="img/brands/disney.png" alt="Disney"></a>
      <a class="brand-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadBrands')) ?>?categoryID=<?= ('1') ?>"><img src="img/brands/hasbro.png" alt="Hasbro"></a>
      <a class="brand-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadBrands')) ?>?categoryID=<?= ('3') ?>"><img src="img/brands/marvel.png" alt="Marvel"></a>
      <a class="brand-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadBrands')) ?>?categoryID=<?= ('7') ?>"><img src="img/brands/pawpatrol.png" alt="Paw Patrol"></a>
      <a class="brand-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadBrands')) ?>?categoryID=<?= ('10') ?>"><img src="img/brands/sonic.png" alt="Sonic"></a>
    </div>

    <br/>

  <div class="banner">
    <h2>Shop By Age</h2>
  </div>

    <br/>

    <div class="button-container">
      <a class="age-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ('1') ?>"><img src="img/ages/0-2.png" alt="Children ages 0-2"></a>
      <a class="age-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ('2') ?>"><img src="img/ages/3-4.png" alt="Children ages 3-4"></a>
      <a class="age-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ('3') ?>"><img src="img/ages/5-7.png" alt="Children ages 5-7"></a>
      <a class="age-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ('4') ?>"><img src="img/ages/8-10.png" alt="Children ages 3-4"></a>
      <a class="age-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ('5') ?>"><img src="img/ages/11-12.png" alt="Children ages 3-4"></a>
      <a class="age-button" href="<?= ($BASE) ?><?= (Base::instance()->alias('toyReadCategories')) ?>?categoryID=<?= ('6') ?>"><img src="img/ages/13+.png" alt="Children ages 3-4"></a>
    </div>
<<<<<<< Updated upstream:ToyTower/Website/tmp/2zmmrtsp62ecs.3bicl5zsrc4k0.php
  </section>

  <br />

  <!-- <div class="Age_Buttons">
        <button class="button button1">0-12 Months</button>
        <button class="button button2">1-2 Years</button>
        <button class="button button3">3-5 Years</button>
        <button class="button button4">6-9 Years</button>
        <button class="button button5">9-12 Years</button>
      </div>
    </section> -->

    <?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?><!-- template footer -->
=======
</section>
<br/>
<?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?><!-- template footer -->
>>>>>>> Stashed changes:ToyTower/tmp/902dttbssg6h.3bicl5zsrc4k0.php
