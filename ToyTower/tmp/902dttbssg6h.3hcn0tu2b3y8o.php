<?php echo $this->render('headers/createAccount_header.php',NULL,get_defined_vars(),0); ?></include
><!-- template header -->

<section id="create-account">
  <div class="card">
    <div class="text-center">
      <h3>Welcome to the Administration Panel</h3>
      <span class="abt">Fill out all required fields to add a toy</span>
      <br />
      <span class="abt"
        >To modify users click ->
        <!-- Brings you to the login page -->
        <a href="<?= ($BASE) ?><?= (Base::instance()->alias('adminModify')) ?>">Modify</a></span
      >
    </div>
    <div class="form mt-3">
      <!-- The form -->
      <form action="" method="POST">
        <?php if ($error): ?>
          <p><?= ($error) ?></p>
        <?php endif; ?>
        <div class="inputbox">
          <input
            type="text"
            name="ToyName"
            class="form-control"
            placeholder="Toy Name"
            value="<?= ($toys['ToyName']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="number"
            step="0.01"
            id="totalAmt"
            name="Price"
            class="form-control"
            placeholder="Price"
            value="<?= ($toys['Price']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="number"
            name="Stock"
            class="form-control"
            placeholder="Stock Available"
            value="<?= ($toys['Stock']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="text"
            name="ToyImage"
            class="form-control"
            placeholder="Toy Image"
            value="<?= ($toys['ToyImage']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="number"
            name="BrandID"
            class="form-control"
            placeholder="BrandID"
            value="<?= ($toys['BrandID']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="number"
            name="AgeRangeID"
            class="form-control"
            placeholder="AgeRangeID"
            value="<?= ($toys['AgeRangeID']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="number"
            name="CategoryID"
            class="form-control"
            placeholder="CategoryID"
            value="<?= ($toys['CategoryID']) ?>"
          />
        </div>
        <div class="mt-4 proceed">
          <div class="text-right">
            <span>
              <input
                id="AddToyButton"
                type="hidden"
                name="ToysID"
                value="<?= ($toys['ToysID']) ?>"
              />
              <button
                class="btn btn-dark btn-block d-flex flex-row justify-content-between align-items-center"
                type="submit"
                value="Add Toy"
              >
                Add Toy
              </button>
            </span>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?></include
><!-- template footer -->
