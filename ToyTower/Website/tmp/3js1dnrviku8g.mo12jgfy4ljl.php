<?php echo $this->render('headers/createAccount_header.html',NULL,get_defined_vars(),0); ?><!-- template header -->

    <!-- <section id="create-account">
      <div class="card">
        <div class="text-center">
          <h3>Create an account</h3>
          <span class="abt"
            >Already have an account? <a href="#">Sign In</a></span
          >
        </div>
        <div class="form mt-3">
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Username" />
          </div>
          <div class="input-group inputbox">
            <input type="text" placeholder="First name" class="form-control" />
            <input type="text" placeholder="Last name" class="form-control" />
          </div>
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Email" />
          </div>
        </div>
        <div class="mt-4 proceed">
          <button
            class="btn btn-primary btn-block d-flex flex-row justify-content-between align-items-center"
          >
            <div class="text-right"><span>Proceed to next step</span></div>
            <div class="text-right">
              <span
                ><i class="fa fa-long-arrow-right align-items-center"></i
              ></span>
            </div>
          </button>
        </div>
        <div class="mt-1">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="flexCheckDefault"
            />
            <label class="form-check-label" for="flexCheckDefault">
              I have read and agree to the <a href="#">Terms of service</a>
            </label>
          </div>
        </div>
      </div>
    </section> -->

    <section id="create-account">
      <div class="card">
        <div class="text-center">
          <h3>Create an account</h3>
          <span class="abt"
            >Already have an account? <a href="#">Login</a></span
          >
        </div>
        <div class="form mt-3">
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Username" />
          </div>
          <div class="inputbox">
            <input
              type="password"
              class="form-control"
              placeholder="Password"
            />
          </div>
          <!-- <div class="input-group inputbox">
            <input type="text" placeholder="First Name" class="form-control" />
            <input type="text" placeholder="Last Name" class="form-control" />
          </div> -->
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="First Name" />
          </div>
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Last Name" />
          </div>
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Email" />
          </div>
          <div class="inputbox">
            <input
              type="text"
              class="form-control"
              placeholder="Phone xxx-xxx-xxxx"
            />
          </div>
          <div class="inputbox">
            <input type="text" class="form-control" placeholder="Postal Code" />
          </div>
        </div>
        <div class="mt-4 proceed">
          <button
            class="btn btn-dark btn-block d-flex flex-row justify-content-between align-items-center"
          >
            <div class="text-right"><span>Create an Account</span></div>
          </button>
        </div>
      </div>
    </section>

    <?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?><!-- template footer -->