<?php echo $this->render('headers/cart_header.html',NULL,get_defined_vars(),0); ?><!-- template header -->

    <section id="cart">
      <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="product-details mr-2">
              <hr />
              <h6 class="mb-0">Shopping cart</h6>
              <div class="d-flex justify-content-between">
                <span>You have 4 items in your cart</span>
                <div class="d-flex flex-row align-items-center">
                  <span class="text-black-50">Sort by:</span>
                  <div class="price ml-2">
                    <span class="mr-1">price</span
                    ><i class="fa fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <div
                class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded"
              >
                <div class="d-flex flex-row">
                  <img
                    class="rounded"
                    src="img/categories/teddyBear.jpg"
                    width="40"
                  />
                  <div class="ml-2">
                    <span class="font-weight-bold d-block">Stuffed Animal</span>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  >
                    <i class="fas fa-minus"></i>
                  </button>

                  <input
                    id="form1"
                    min="0"
                    name="quantity"
                    value="1"
                    type="number"
                    class="form-control form-control-sm"
                  />

                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                  >
                    <i class="fas fa-plus"></i>
                  </button>
                  <span class="d-block ml-5 font-weight-bold">$29.99</span
                  ><i class="fa fa-trash-o ml-3 text-black-50"></i>
                </div>
              </div>
              <div
                class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded"
              >
                <div class="d-flex flex-row">
                  <img
                    class="rounded"
                    src="img/categories/teddyBear.jpg"
                    width="40"
                  />
                  <div class="ml-2">
                    <span class="font-weight-bold d-block">Action Figure</span>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  >
                    <i class="fas fa-minus"></i>
                  </button>

                  <input
                    id="form1"
                    min="0"
                    name="quantity"
                    value="1"
                    type="number"
                    class="form-control form-control-sm"
                  />

                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                  >
                    <i class="fas fa-plus"></i>
                  </button>
                  <span class="d-block ml-5 font-weight-bold">$13.99</span
                  ><i class="fa fa-trash-o ml-3 text-black-50"></i>
                </div>
              </div>
              <div
                class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded"
              >
                <div class="d-flex flex-row">
                  <img
                    class="rounded"
                    src="img/categories/teddyBear.jpg"
                    width="40"
                  />
                  <div class="ml-2">
                    <span class="font-weight-bold d-block">Doll</span>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  >
                    <i class="fas fa-minus"></i>
                  </button>

                  <input
                    id="form1"
                    min="0"
                    name="quantity"
                    value="1"
                    type="number"
                    class="form-control form-control-sm"
                  />

                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                  >
                    <i class="fas fa-plus"></i>
                  </button>
                  <span class="d-block ml-5 font-weight-bold">$38.99</span
                  ><i class="fa fa-trash-o ml-3 text-black-50"></i>
                </div>
              </div>
              <div
                class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded"
              >
                <div class="d-flex flex-row">
                  <img
                    class="rounded"
                    src="img/categories/teddyBear.jpg"
                    width="40"
                  />
                  <div class="ml-2">
                    <span class="font-weight-bold d-block">Lego Set</span>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  >
                    <i class="fas fa-minus"></i>
                  </button>

                  <input
                    id="form1"
                    min="0"
                    name="quantity"
                    value="1"
                    type="number"
                    class="form-control form-control-sm"
                  />

                  <button
                    class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                  >
                    <i class="fas fa-plus"></i>
                  </button>
                  <span class="d-block ml-5 font-weight-bold">$69.99</span
                  ><i class="fa fa-trash-o ml-3 text-black-50"></i>
                </div>
              </div>
            </div>
          </div>
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
                <span>Subtotal</span><span>$3000.00</span>
              </div>
              <div class="d-flex justify-content-between information">
                <span>Shipping</span><span>$20.00</span>
              </div>
              <div class="d-flex justify-content-between information">
                <span>Total(Incl. taxes)</span><span>$3020.00</span>
              </div>
              <button
                class="btn btn-dark btn-block d-flex justify-content-between mt-3"
                type="button"
              >
                <span>$3020.00</span><span> &#160;Checkout </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?><!-- template footer -->