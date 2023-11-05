<?php echo $this->render('headers/login_header.php',NULL,get_defined_vars(),0); ?><!-- template header -->
  
  <section id="login">
    <div class="card">
      <div class="text-center">
        <h3>Login</h3>
        <span class="abt"
          >Don't have an account? <a href="<?= ($BASE) ?><?= (Base::instance()->alias('signUpCreate')) ?>">Create an Account</a></span
        >
      </div>
      <form method="POST" action="loginhandler.php">
        <div class="form mt-3">
            <div class="inputbox">
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
            </div>
            <div class="inputbox">
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
            </div>
            <div class="mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember Me
                    </label>
                </div>
            </div>
            <div class="mt-4 proceed">
                <button type="submit"
                    class="btn btn-dark btn-block d-flex flex-row justify-content-between align-items-center">
                    <div class="text-right"><span>Login</span></div>
                </button>
            </div>
        </div>
    </form>
    </div>
  </section>

    <?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?><!-- template footer -->