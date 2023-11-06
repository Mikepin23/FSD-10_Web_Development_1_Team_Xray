<?php echo $this->render('headers/cart_header.php',NULL,get_defined_vars(),0); ?>

    <div class="container mt-5 p-3 rounded cart">
      <div class="row no-gutters">
    
        <div class="col-md-8">
          <div class="product-details mr-2">
            <hr />
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="mb-0">Shopping cart</h6>
              <div class="d-flex align-items-center">
                  <h6 class="mb-0 mr-3">Empty Cart</h6>
                  <a class="nav-link" href="<?= ($BASE) ?><?= (Base::instance()->alias('cartEmptyCart')) ?>">
                      <i class="fa fa-trash icon" style="margin-left: 5px;"></i>
                  </a>
              </div>
          </div>
          
          
          
            
            <div class="d-flex justify-content-between">
              <?php foreach (($item?:[]) as $item): ?>
            </div>
              <!-- Card to Display Cart -->
              <div
              class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded"
              >
              <div class="d-flex flex-row">
                <img
                  class="rounded"
                  src="<?= ($item['ToyImage']) ?>"
                  width="40"
                />
                <div class="ml-2">
                  <span class="font-weight-bold d-block"><?= ($item['ToyName']) ?></span>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center">
                <span>Qty:<?= ($item['quantity']) ?></span>
                <span class="d-block ml-3 font-weight-bold">$<?= ($item['Price']) ?></span>
                <i class="fa fa-trash-o ml-3 text-black-50"></i>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- card details -->
        <div class="col-md-4">
          <div class="payment-info">
            <div class="d-flex justify-content-between align-items-center">
              <span>Card details</span>
            </div>
            <span class="type d-sm-block mt-3 mb-1">Card type</span
            ><label class="radio">
              <input type="radio" name="card" value="payment" checked />
              <span
                ><img
                  width="30"
                  src="https://img.icons8.com/color/48/000000/mastercard.png"
              /></span>
            </label>
  
            <label class="radio">
              <input type="radio" name="card" value="payment" />
              <span
                ><img
                  width="30"
                  src="https://img.icons8.com/officel/48/000000/visa.png"
              /></span>
            </label>
  
            <label class="radio">
              <input type="radio" name="card" value="payment" />
              <span
                ><img
                  width="30"
                  src="https://img.icons8.com/ultraviolet/48/000000/amex.png"
              /></span>
            </label>
  
            <label class="radio">
              <input type="radio" name="card" value="payment" />
              <span
                ><img
                  width="30"
                  src="https://img.icons8.com/officel/48/000000/paypal.png"
              /></span>
            </label>
            <div>
              <label class="credit-card-label">Name on card</label
              ><input
                type="text"
                class="form-control credit-inputs"
                placeholder="Name"
              />
            </div>
            <div>
              <label class="credit-card-label">Card number</label
              ><input
                type="text"
                class="form-control credit-inputs"
                placeholder="0000 0000 0000 0000"
              />
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="credit-card-label">Date</label
                ><input
                  type="text"
                  class="form-control credit-inputs"
                  placeholder="12/24"
                />
              </div>
              <div class="col-md-6">
                <label class="credit-card-label">CVV</label
                ><input
                  type="text"
                  class="form-control credit-inputs"
                  placeholder="342"
                />
              </div>
            </div>
            <hr class="line" />
            <div class="d-flex justify-content-between information">
              <span>Subtotal</span><span>$<?= ($subtotal) ?></span>
            </div>
            <div class="d-flex justify-content-between information">
              <span>Shipping</span><span>$<?= ($shipping_cost) ?></span>
            </div>
            <div class="d-flex justify-content-between information">
              <span>Total(Incl. taxes)</span><span>$<?= ($total_price) ?></span>
            </div>
            <form action="<?= ($BASE) ?><?= (Base::instance()->alias('checkoutPost')) ?>" method="POST">
              <button
              class="btn btn-dark btn-block d-flex justify-content-between mt-3"
              type="submit"
            >
              <span>$<?= ($total_price) ?></span><span> &#160;Checkout </span>
            </button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>

    
  </section>

  <?php echo $this->render('footer.php',NULL,get_defined_vars(),0); ?><!-- template footer -->

