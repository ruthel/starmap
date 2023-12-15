<!--<section class="common-banner-wrapper type2">-->
<!--    <div class="container">-->
<!--        <h1 class="banner_heading">-->
<!--            Checkout-->
<!--            <div class="svg_line">-->
<!--                <svg xmlns="http://www.w3.org/2000/svg" width="422" height="111" viewBox="0 0 422 111" fill="none">-->
<!--                  <path d="M36.4832 16.1343C161.517 -2.61968 415.239 -13.906 418.811 63.891C421.383 119.898 21.6335 123.214 4.98162 71.2573C-3.4358 44.9937 6.10613 14.1961 253.971 2.81501" stroke="#973BF2" stroke-width="4.79558"></path>-->
<!--              </svg>-->
<!--          </div>-->
<!--      </h1>-->
<!--  </div>-->
<!--  <div class="index-banner-gradient-2">-->
<!--    <img src="assets/front/images/gradient-left.png" class="img-fluid" alt="">-->
<!--</div>-->
<!--</section>-->
<!---->
<!--<section class="contact-first-wrapper">-->
<!--    <div class="contact-gradient">-->
<!--        <img src="assets/front/images/first-wrap-gradient.png" alt="">-->
<!--    </div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">-->
<!--                <div class="contact-first-wrap-text">-->
<!--                    <h3 class="gen_heading pb-4 text-start">Customer Details</h3>-->
<!--                    <h6 class="mb-3">Fill The Below Form</h6>-->
<!--                </div>-->
<!--            </div>-->
<!--            <form action='--><?php //echo base_url('ecommerce/order/'.$map->map_id);?><!--' method='POST'class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">-->
<!--                <div class="row">-->
<!--                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">-->
<!--                        <div class="contact-first-input">-->
<!--                            <input type="text" placeholder="First Name" name='customer_first_name'>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">-->
<!--                        <div class="contact-first-input">-->
<!--                            <input type="text" placeholder="Last Name" name='customer_last_name'>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">-->
<!--                        <div class="contact-first-input">-->
<!--                            <input type="email" placeholder="Email" name='customer_email'>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">-->
<!--                        <div class="contact-first-input">-->
<!--                                <input type="tel" placeholder="Phone Number" name='customer_phone_number'>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row">-->
<!---->
<!---->
<!--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">-->
<!--                        <div class="contact-first-input">-->
<!--                            <textarea placeholder="Message" name='customer_message'></textarea>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">-->
<!--                        <div class="contact-first-input">-->
<!--                            <button type='submit'>Proceed to Payment</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">-->
<!--                <div class="order-summary-card">-->
<!--                    <div class="summary-group">-->
<!--                        <p class="title">Order Summary</p>-->
<!--                    </div>-->
<!--                    <div class="summary-group">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <span>Map place</span>-->
<!--                                <span>--><?php //echo $map->map_place;?><!--</span>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <span>Map Address</span>-->
<!--                                <span>--><?php //echo $map->map_diplay_address;?><!--</span>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <span>Map Date</span>-->
<!--                                <span>--><?php //echo $map->map_date;?><!--</span>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="summary-group">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <span><b>Total (incl VAT)</b></span>-->
<!--                                <span>$1,399.00</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?php //print_r($map); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/map.css">
</head>
<body>
<div class="s-container">
  <div class="nav">
    <div id="title-bloc">
      <div style="margin-right: 8px">
        <img src="assets/media/img/logo.png" alt="" style="width: 32px; margin-top: 6px">
      </div>
      <h1 id="title"><a href="index.php">Starlight Map</a></h1>
    </div>
    <div>
      <ul class="menu">
        <li><a href="./editor">Create a star map</a></li>
        <li><a href="./about">About Us</a></li>
        <li><a href="./contact">Contact</a></li>
      </ul>
    </div>
  </div>
  <form action="ecommerce/order" method="post">
    <table style="width: 100%" cellspacing="0">
      <tr>
        <th>PRODUCT</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
      </tr>

      <tr>
        <td>
          <div style="display: flex;">
            <img src="assets/media/checkout.png" alt="" height="280">
            <div style="margin-left: 8px; display: grid; grid-template-rows: repeat(8,1fr); row-gap: 12px">
              <div><strong>Title: </strong><?= $map->map_place ?>
              </div>
              <div><strong>Subtitle: </strong><?= $map->map_subtitle ?></div>
              <div><strong>Messages: </strong> <?= $map->map_custom_text ?></div>
              <!--            <div><strong>CertID: </strong>L098PPKS</div>-->
              <div><strong>Type: </strong>Poster</div>
              <div><strong>Print Size ($14.00): </strong><?= $map->map_size ?></div>
              <div><strong>Frame: </strong><?= $map->map_style_poster ?></div>
            </div>
          </div>
        </td>
        <td>
          <div>$49.00</div>
        </td>
        <td>
          <div>$49.00</div>
        </td>
        <td>
          <div>$49.00</div>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <hr>
          <div style="text-align: right">
            <button style="background: #E6E6E6; padding: 8px 16px; border: none; cursor:pointer;">UPDATE CART</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div style="width: calc(100% - 16px);">
            <hr>
            <div style="padding: 8px 0">HAVE A COUPON ?</div>
            <hr>
            <input type="text" placeholder="Coupon code"
                   style="padding: 16px; background: #E6E6E6; width: 100%; box-sizing: border-box; border: none; margin: 12px 0 24px">
            <div>
              <button style="background: #E6E6E6; padding: 16px 16px; border: none; cursor:pointer;width: 100%">APPLY
                COUPON
              </button>
            </div>
          </div>
        </td>
        <td colspan="3">
          <div style="background: #e6e6e6; width: 100%; padding: 8px 24px 24px; box-sizing: border-box">
            <h1 style="margin: 0; font-weight: 500; font-size: 28px">CART TOTALS</h1>
            <hr>
            <div style="display: flex; padding: 16px 0">
              <span style="flex: 1">Subtotal</span>
              <span>$49.00</span>
            </div>
            <hr>
            <div style="display: flex; padding: 16px 0">
              <span style="flex: 1">Total</span>
              <span style="color: #29ABE2">$49.00</span>
            </div>
            <div>
              <div>
                <button
                    style="color: white;background: #00833E; padding: 16px 16px; border: none; cursor:pointer;width: 100%">
                  PAY WITH LINK =>
                </button>
              </div>
              <div style="text-align: center; padding: 8px 0">- OR -</div>
              <div>
                <button
                    style="color: white;background: #29ABE2; padding: 16px 16px; border: none; cursor:pointer;width: 100%">
                  APPLY PROCEED TO CHECKOUT
                </button>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>