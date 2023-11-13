


<section class="common-banner-wrapper type2">
    <div class="container">
        <h1 class="banner_heading">
            Checkout
            <div class="svg_line"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="422" height="111" viewBox="0 0 422 111" fill="none">
                  <path d="M36.4832 16.1343C161.517 -2.61968 415.239 -13.906 418.811 63.891C421.383 119.898 21.6335 123.214 4.98162 71.2573C-3.4358 44.9937 6.10613 14.1961 253.971 2.81501" stroke="#973BF2" stroke-width="4.79558"></path>
              </svg>
          </div>
      </h1>
  </div>
  <div class="index-banner-gradient-2">
    <img src="assets/front/images/gradient-left.png" class="img-fluid" alt="">
</div>
</section>

<section class="contact-first-wrapper">
    <div class="contact-gradient">
        <img src="assets/front/images/first-wrap-gradient.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="contact-first-wrap-text">
                    <h3 class="gen_heading pb-4 text-start">Customer Details</h3>
                    <h6 class="mb-3">Fill The Below Form</h6>
                </div>
            </div>
            <form action='<?php echo base_url('ecommerce/order/'.$map->map_id);?>' method='POST'class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="contact-first-input">
                            <input type="text" placeholder="First Name" name='customer_first_name'> 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="contact-first-input">
                            <input type="text" placeholder="Last Name" name='customer_last_name'> 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="contact-first-input">
                            <input type="email" placeholder="Email" name='customer_email'> 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="contact-first-input">
                                <input type="tel" placeholder="Phone Number" name='customer_phone_number'> 
                        </div>
                    </div>
                </div>

                <div class="row">
                   

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="contact-first-input">
                            <textarea placeholder="Message" name='customer_message'></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="contact-first-input">
                            <button type='submit'>Proceed to Payment</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="order-summary-card">
                    <div class="summary-group">
                        <p class="title">Order Summary</p>
                    </div>
                    <div class="summary-group">
                        <ul>
                            <li>
                                <span>Map place</span>
                                <span><?php echo $map->map_place;?></span>
                            </li>
                            <li>
                                <span>Map Address</span>
                                <span><?php echo $map->map_diplay_address;?></span>
                            </li>
                            <li>
                                <span>Map Date</span>
                                <span><?php echo $map->map_date;?></span>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="summary-group">
                        <ul>
                            <li>
                                <span><b>Total (incl VAT)</b></span>
                                <span>$1,399.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>