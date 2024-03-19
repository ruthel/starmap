<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starlight Map</title>
  <link rel="preload" href="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707904826/star_map.webp" as="image">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/home.css">
  <script src="<?php echo base_url('assets/front/'); ?>js/jquery-3.6.3.min.js"></script>
  <script src="https://unpkg.com/scrollreveal@4"></script> </head>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script defer src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/front/'); ?>js/swiper-bundle.min.js"></script>
  <!--  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>-->
  <link media="screen" disabled
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
</head>
<body style="overflow-y: auto; background: black">
<script>
  var noPrint = true;
  var noScreenshot = true;
  // var autoBlur=true;
  var noCopy = true;
</script>
<script defer src="https://pdfanticopy.com/noprint.js"></script>
<div id="main-home">
  <div id="main-header">
    <div class="s-container" style="padding: 0; min-height: 100%">
      <div class="nav">
        <div id="title-bloc">
          <div style="margin-right: 8px">
            <img src="assets/media/img/logo.png" width="41" height="40" alt="" style="width: 32px; margin-top: 6px">
          </div>
          <h1 id="title"><a href="index.php">Starlight Map</a></h1>
        </div>
        <div>
          <ul class="menu">
            <li><a href="./editor">Create Star Map</a></li>
            <li><a href="./about">About Us</a></li>
            <li><a href="./contact">Contact</a></li>
            <li><a href="./faq">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div id="header-bloc">
        <div style="flex: 1">
          <h1 style="font-size: 48px;font-weight: 500">Personalized Star Map</h1>
          <h2 style="font-size: 32px; max-width: 500px; margin-top: 48px; font-weight: 400">Sieze the special moment
            forever</h2>
          <div id="btn-box">
            <button class="btn-create-map" onclick="window.location.href = './editor'">Create a Custom Star Map</button>
          </div>
        </div>
        <div>
          <img style="box-shadow: 10px 4px 6px .1px rgba(0,0,0,.8)"
               src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707904826/star_map.webp"
               loading="eager"
               alt="star map">
        </div>
      </div>
      <div>
        <ul id="list-icon-header">
          <li>
            <div class="service-item">
              <img src="assets/media/img/img_2.png" loading="lazy" alt="" width="48" height="47">
              <div>
                <div>Verified by real</div>
                <div>astronomers</div>
              </div>
            </div>
          </li>
          <li>
            <div class="service-item">
              <img src="assets/media/img/img_1.png" alt="" width="48" height="48" loading="lazy">
              <div>
                <div>Instant Online Delivery via email</div>
                <div>Express 3-5days</div>
              </div>
              <div></div>
            </div>
          </li>
          <li>
            <div class="service-item">
              <img src="assets/media/img/img.png" alt="" width="48" height="48" loading="lazy">
              <div>
                <div>Customer Support</div>
                <div>+1 (332)900 09876</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg">
    <div class="s-container">
      <div style="text-align: center">
        <h1 class="title-sub">Our Personal Star Map Designs</h1>
        <div style="font-size: 16px">Pick your favourite design. Add a personal note to the</div>
        <div style="">recipient and even add a special QR code to surprise your beloved ones</div>
      </div>
      <div>
        <div class="main-carousel"
             data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": true }'
             style="padding: 64px 0;">
          <img
              onclick="window.location.href = './editor'"
              src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1708001537/pmap_1_gwoxnx.webp" alt=""
              class="carousel">
          <img
              onclick="window.location.href = './editor'"
              src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1708001536/pmap_2_sdgm96.webp" alt=""
              class="carousel">
          <img
              onclick="window.location.href = './editor'"
              src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1708001536/pmap_3_rexi7c.webp" alt=""
              class="carousel">
          <img
              onclick="window.location.href = './editor'"
              src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1708001536/pmap_4_rxs4fo.webp" alt=""
              class="carousel">
          <img
              onclick="window.location.href = './editor'"
              src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1708001536/pmap_5_yaljai.webp" alt=""
              class="carousel">
          <img
              onclick="window.location.href = './editor'"
              src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1708001537/pmap_1_gwoxnx.webp" alt=""
              class="carousel">
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray">
    <div class="s-container">
      <div style="text-align: center; color: #000" id="looking_for_gift" class="animated-1">
        <div>
          <img src="assets/media/gift_icon.png" alt="" width="39" height="43">
        </div>
        <h1 class="title-sub">Looking For a Perfect Gift ?</h1>
        <div>Our personalized star maps can help capture your happiest</div>
        <div>memories forever.You can design and print a custom map</div>
        <div>that shows the way stars looked on your special day.You can</div>
        <div>choose any place and time!</div>
      </div>
    </div>
    <div class="bg">
      <div class="s-container"
           id="led_map">
        <div style="text-align: center" class="promo">
          <h2>$395.00</h2>
          <h2 style="color: red">$32.90</h2>
          <div>*Express shipping included</div>
        </div>
        <div
            style="display: flex; flex-direction: column; align-items: center; justify-content: space-between; height: 100%">
          <div style="flex: 1; margin-bottom: 32px">
            <h1 class="title-sub">Create LED Star Map</h1>
            <div>Let stars light up the sacred path of your life</div>
          </div>
          <!--          <button class="btn-create-map" onclick="window.location.href = './editor'">Buy The Premium Star Map</button>-->
          <button class="btn-create-map disabled">Out of stock</button>
        </div>
        <div>
          <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707911985/banner_img.webp" alt="" height="209"
               width="212" loading="lazy">
        </div>
      </div>
    </div>
    <div style="padding: 64px 0" class="animated-element">
      <h1 class="title-sub">Some Of The Happy Star Map Owners</h1>
      <div class="grid-map">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707912532/landing_block4_img1_yqna07.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707912617/landing_block4_img2_litvpg.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707912661/landing_block4_img3_folc0w.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707912806/landing_block4_img4_vyxago.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707912941/landing_block4_img5_odvvwr.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707912996/landing_block4_img6_zyrsk5.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707913075/landing_block4_img7_hgbxa1.webp"
            alt="owner" loading="lazy">
        <img
            onclick="window.location.href='editor'"
            src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707913118/landing_block4_img8_xcpvdq.webp"
            alt="owner" loading="lazy">
      </div>
    </div>
    <div class="bg">
      <div class="s-container" id="reason_to_choose">
        <div style="text-align: center">
          <h1 class="title-sub">Reasons To Choose Us</h1>
        </div>
        <div>
          <div class="grid-map-2">
            <div>
              <img src="assets/media/reason_icon/icon_0.png" alt="icon_0" width="48" height="48">
              <h1 class="title-sub-2">The Best Star Map Designs</h1>
              <div>
                We genuinely believe that we’ve created the best Star Map
                designs. You can choose from a dozen of beautiful
                templates. Each of them was created by world-class artists
                that we constantly collaborate with.
              </div>
            </div>
            <div>
              <img src="assets/media/reason_icon/icon_1.png" alt="icon_1" width="48" height="48">
              <h1 class="title-sub-2">Simple Generator</h1>
              <div>
                Our generator allows you to personalize your star map in 3
                simple steps. Pick a place and date, add a personal message
                or an interactive QR code, choose your design, and your
                accurate star map is ready to go.
              </div>
            </div>
            <div>
              <img src="assets/media/reason_icon/icon_2.png" alt="icon_2" width="48" height="48">
              <h1 class="title-sub-2">Trusted by over 10,000 <br>Happy Customers</h1>
              <div>Since 2018, we have helped over 10,000 people to
                commemorate more than 10,000 happy moments in their life. Our customer service will make sure that you
                are 100% satisfied.
              </div>
            </div>
            <div>
              <img src="assets/media/img/img_1.png" width="48" alt="icon_1 img" height="51">
              <h1 class="title-sub-2">Instant delivery via email</h1>
              <div>
                You'll be happy to hear we send all our Star Maps via email as
                a printable PDF with detailed printing and framing
                instructions right after each purchase
              </div>
            </div>
            <div>
              <img src="assets/media/img/img_2.png" alt="icon_2 img" width="48" height="47">
              <h1 class="title-sub-2">Verified by Astronomers</h1>
              <div>We use an algorithm that is verified by international
                astronomers and the scientific society to generate each Star
                Map. We assure that you won’t get any fake products.
              </div>
            </div>
            <div>
              <img src="assets/media/reason_icon/icon_5.png" alt="icon_5" width="48" height="48">
              <h1 class="title-sub-2">Top Notch Quality</h1>
              <div>Amazing Quality We are proud to print our Star Maps on the highest quality fine art matte paper (250
                GSM on 300 DPI). It makes our Star Maps look as crisp as possible.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="padding: 64px 0" id="Attach_photos" class="animated-2">
      <img src="assets/media/img_10.png" alt="" height="84" width="93">
      <h1 class="title-sub" style="margin-top: 0 !important;">Attach photos, videos or any other link <br>
        with the help of QR Code feature</h1>
      <div>
        <div>Make your Star Map even more personal by adding a unique</div>
        <div>QR Code to extend your private message. The QR Code can</div>
        <div>contain any link: one with a picture of a special moment that</div>
        <div>you’ve uploaded to Instagram, the song that was playing on</div>
        <div>that memorable night, or even a YouTube video.</div>
      </div>
      <button class="btn-create-map" onclick="window.location.href = './editor'">See how it works here</button>
    </div>
    <div class="bg">
      <div class="s-container">
        <div style="text-align: center">
          <h1 class="title-sub">Check out the live reactions of some of our customers</h1>
        </div>
        <div>
          <div class="grid-map" style="grid-template-rows:none; grid-template-columns: repeat(3,200px)">
            <div class="video">
              <!--              <img src="assets/media/img_15.png" alt="">-->
              <video controls src="assets/media/react1.mp4" width="200">
            </div>
            <div class="video">
              <!--              <img src="assets/media/img_15.png" alt="">-->
              <video controls src="assets/media/react2.mp4" width="200">
            </div>
            <div class="video">
              <!--              <img src="assets/media/img_15.png" alt="">-->
              <video controls src="assets/media/react3.mp4" width="200">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-2">
      <div class="s-container">
        <div style="text-align: center">
          <h1 class="title-sub">Looking for a perfect occasion?</h1>
        </div>
        <div>
          <div class="grid-map-4">
            <div class="occasion" onclick="window.location.href='editor'">
              <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707914178/landing_block8_img1_aum8ef.webp"
                   alt="" style="width: 100%" height="148" width="199" loading="lazy">
              <h3 style="margin: 0">Birthday Gift</h3>
              <div style="font-size: 12px; padding: 8px">Birthday Gift Star Maps of the special
                night sky when a loved one was born
                makes a great gift.
              </div>
            </div>
            <div class="occasion" onclick="window.location.href='editor'">
              <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707914248/landing_block8_img2_oriimo.webp"
                   alt="" style="width: 100%" height="148" width="201" loading="lazy">
              <h3 style="margin: 0">Anniversary Gift</h3>
              <div style="font-size: 12px; padding: 8px">Surprise your better half with a
                reminder of the way stars looked
                when she said “Yes.”
              </div>
            </div>
            <div class="occasion" onclick="window.location.href='editor'">
              <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707914264/landing_block8_img3_sk1c2d.webp"
                   alt="" style="width: 100%" height="148" width="201" loading="lazy">
              <h3 style="margin: 0">Housewarming Gift</h3>
              <div style="font-size: 12px; padding: 8px">Make your home cozy with a beautiful
                print of the night sky. Great addition
                that fits any interior.
              </div>
            </div>
            <div class="occasion" onclick="window.location.href='editor'">
              <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707914277/landing_block8_img4_fhmnty.webp"
                   alt="" style="width: 100%" height="148" width="200" loading="lazy">
              <h3 style="margin: 0">Valentine's Day Gift</h3>
              <div style="font-size: 12px; padding: 8px">Romantic Star Map is a great choice
                for St. Valentine’s Day present.
              </div>
            </div>
            <div class="occasion" onclick="window.location.href='editor'">
              <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707914281/landing_block8_img5_uwqwll.webp"
                   alt="" style="width: 100%" height="148" width="200" loading="lazy">
              <h3 style="margin: 0">Christmas Gift</h3>
              <div style="font-size: 12px; padding: 8px">Simple, elegant, beautiful Star Map
                will bring only good vibes to your
                holiday season.
              </div>
            </div>
            <div class="occasion" onclick="window.location.href='editor'">
              <img src="https://res.cloudinary.com/dyhgx4nro/image/upload/v1707914373/landing_block8_img6_fuhjfj.webp"
                   alt="" style="width: 100%" height="148" width="200" loading="lazy">
              <h3 style="margin: 0">Mother’s Day Gift</h3>
              <div style="font-size: 12px; padding: 8px">Show your mother how much you
                care about her
                Get her a personalized Star Map.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray">
      <div class="s-container" class="animated-3">
        <div style="text-align: center; color: #000">
          <h1 class="title-sub">The Print Quality</h1>
        </div>
        <div>
          <div class="grid-map-3">
            <div class="video">
              <!--              <img src="assets/media/img_15.png" alt="">-->
              <video controls src="assets/media/quality.mp4" width="200">
            </div>
            <div class="video">
              <!--              <img src="assets/media/img_15.png" alt="">-->
              <video controls src="assets/media/quality2.mp4" width="200">
            </div>
            <div class="video">
              <!--              <img src="assets/media/img_15.png" alt="">-->
              <video controls src="assets/media/quality3.mp4" width="200">
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      window.sr = ScrollReveal(); // Initialize ScrollReveal

      sr.reveal('.animated-element', {
        origin: 'bottom', // Animation origin (can be 'top', 'left', 'right', etc.)
        distance: '200px', // Distance to trigger animation (in pixels)
        duration: 1000, // Animation duration (in milliseconds)
        reset: false // Reset animation on scroll back (optional)
      });
      sr.reveal('.animated-1', {
        origin: 'bottom', // Animation origin (can be 'top', 'left', 'right', etc.)
        distance: '200px', // Distance to trigger animation (in pixels)
        duration: 1000, // Animation duration (in milliseconds)
        reset: false // Reset animation on scroll back (optional)
      });
      sr.reveal('.animated-2', {
        origin: 'bottom', // Animation origin (can be 'top', 'left', 'right', etc.)
        distance: '200px', // Distance to trigger animation (in pixels)
        duration: 1000, // Animation duration (in milliseconds)
        reset: false // Reset animation on scroll back (optional)
      });
      sr.reveal('.animated-3', {
        origin: 'bottom', // Animation origin (can be 'top', 'left', 'right', etc.)
        distance: '200px', // Distance to trigger animation (in pixels)
        duration: 1000, // Animation duration (in milliseconds)
        reset: false // Reset animation on scroll back (optional)
      });

      // Add more reveal options for other elements with different classes and animations
      sr.reveal('.another-animated-element', { /* Customize options for this element */ });
    </script>
  </div>
</div>
</body>

