<?php echo $this->render('headers/homepage_header.php',NULL,get_defined_vars(),0); ?><!-- template header -->

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
      <button class="brand-button">
        <img src="img/brands/barbie.png" alt="Image1" />
      </button>
      <button class="brand-button">
        <img src="img/brands/disney.png" alt="Image2" />
      </button>
      <button class="brand-button">
        <img src="img/brands/hasbro.png" alt="Image3" />
      </button>
      <button class="brand-button">
        <img src="img/brands/marvel.png" alt="Image4" />
      </button>
      <button class="brand-button">
        <img src="img/brands/pawpatrol.png" alt="Image5" />
      </button>
      <button class="brand-button">
        <img src="img/brands/sonic.png" alt="Image5" />
      </button>
    </div>

    <br />

    <div class="banner">
      <h2>Shop By Age</h2>
    </div>

    <br />

    <div class="button-container">
      <button class="age-button">
        <img src="img/ages/0-2.png" alt="Image1" />
      </button>
      <button class="age-button">
        <img src="img/ages/3-4.png" alt="Image2" />
      </button>
      <button class="age-button">
        <img src="img/ages/5-7.png" alt="Image3" />
      </button>
      <button class="age-button">
        <img src="img/ages/8-10.png" alt="Image4" />
      </button>
      <button class="age-button">
        <img src="img/ages/11-12.png" alt="Image5" />
      </button>
      <button class="age-button">
        <img src="img/ages/13+.png" alt="Image5" />
      </button>
    </div>
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

    <?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?><!-- template footer -->
