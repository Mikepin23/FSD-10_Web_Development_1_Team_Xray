<?php echo $this->render('headers/createAccount_header.php',NULL,get_defined_vars(),0); ?></include
><!-- template header -->

<section id="create-account">
  <div class="card">
    <div class="text-center">
      <h3>Create an account</h3>
      <span class="abt"
        >Already have an account?
        <!-- Brings you to the login page -->
        <a href="<?= ($BASE) ?><?= (Base::instance()->alias('loginRead')) ?>">Login</a></span
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
            name="Username"
            class="form-control"
            placeholder="Username"
            value="<?= ($createAccount['Username']) ?>" 
          />
        </div>
        <div class="inputbox">
          <input
            type="password"
            name="UserPass"
            class="form-control"
            placeholder="Password"
            value="<?= ($createAccount['UserPass']) ?>"
          />
        </div>
        <div class="inputbox">
          <input
            type="text"
            name="UserFN"
            class="form-control"
            placeholder="First Name"
          />
        </div>
        <div class="inputbox">
          <input
            type="text"
            name="UserLN"
            class="form-control"
            placeholder="Last Name"
          />
        </div>
        <div class="inputbox">
          <input
            type="text"
            name="UserEmail"
            class="form-control"
            placeholder="Email"
          />
        </div>
        <div class="inputbox">
          <input
            type="text"
            name="Phone"
            class="form-control"
            placeholder="Phone xxx-xxx-xxxx"
          />
        </div>
        <div class="inputbox">
          <input
            type="text"
            name="PostalCode"
            class="form-control"
            placeholder="Postal Code"
          />
        </div>
        <div class="mt-4 proceed">
          <div class="text-right">
            <span>
              <input
                id="CreateAccountButton"
                type="hidden"
                name="UserID"
                value="<?= ($createAccount['UserID']) ?>"
              />
              <button
                id="SubmitButton"
                class="btn btn-dark btn-block d-flex flex-row justify-content-between align-items-center"
                type="submit"
                value="Create Account"
              >
                Create Account
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
