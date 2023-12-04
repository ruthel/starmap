<script type="text/javascript" src="<?php echo base_url('assets/front/d3-celestial-master/lib/'); ?>d3.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url('assets/front/d3-celestial-master/lib/'); ?>d3.geo.projection.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/front/d3-celestial-master/'); ?>celestial.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('assets/front/d3-celestial-master/'); ?>celestial.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    .colors label.selected {
        border: 3px double white;
    }

    #stars-image {
        max-width: 100%;
        max-height: 100%;
        margin: 0 auto;
    }

    #stars-image svg {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: 60%;
    }


    .custom-card {
        background-color: #000000;
        position: relative;
        /* padding: 40px; */
        text-align: center;
        height: 100vh;
        max-height: 650px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        align-content: center;
        box-shadow: 1px 1px 8px 8px #0000003b;
        margin: 0 auto;
        transition-duration: .5s;
    }

    .custom-card.portrait {
        aspect-ratio: 193 / 258;
    }


    .custom-card.landscape {
        aspect-ratio: 272 / 201;
    }

    .custom-card.square {
        aspect-ratio: 1 / 1;
    }

    .custom-card.landscape #stars-image {
        max-width: 70%;
        max-height: 70%;
    }

    .custom-card .texts .text-content {
        font-size: 50%;
        font-weight: 700;
        color: #fff;
        margin-top: 10px;
    }

    .custom-card .texts .place-name {
        font-size: 13px;
        font-weight: 400;
        color: #fff;
        margin: 0;
    }

    .custom-card .texts .long-lat {
        font-size: 13px;
        font-weight: 400;
        color: #fff;
        margin: 0;
    }

    .custom-card .texts .date {
        font-size: 13px;
        font-weight: 400;
        color: #fff;
        margin: 0;
    }

    .custom-card .texts {
        width: 100%;
        font-family: 'Montserrat', sans-serif;
    }

    .custom-card::before {
        position: absolute;
        background: none;
        content: "";
        height: 95%;
        width: 95%;
        top: 2.5%;
        left: 2.5%;
        border: 2px solid #fff;
    }

    .custom-card .user-image {
        width: 190px;
        border-radius: 15px;
        overflow: hidden;
        margin: 10px;
    }

    .custom-card .user-image img {
        width: 100%;
    }

    body {
        min-height: 100vh;
        height: auto;
        background: url(assets/front/images/body-2.jpg) center;
        background-size: cover;
    }

    .colors label {
        height: 30px;
        width: 30px;
    }

    .colors label input {
        display: none;
    }

    .colors {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }


    .sizes {
        display: flex;
        gap: 7px;
    }

    .sizes .portrait {
        height: 70px;
        width: 50px;
        border: 2px solid #5c5c5c;
    }

    .sizes input[type="radio"] {
        display: none;
    }

    .sizes .landscape {
        height: 50px;
        width: 70px;
        border: 2px solid #5c5c5c;
    }

    .sizes .square {
        height: 50px;
        width: 50px;
        border: 2px solid #5c5c5c;
    }

    .sizes label.selected {
        border-color: #fff;
    }

    .form-control {
        background: #ffffff12;
        color: #fff;
    }

    .form-control:focus {
        background: #ffffff12;
        color: #fff;
    }

</style>
<style>
    /*
   * Always set the map height explicitly to define the size of the div element
   * that contains the map.
   */
    #map {
        height: 100%;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }

    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<div style="overflow:hidden;margin:0 auto;display: none;">
  <div id="celestial-map"></div>
</div>
<div id="celestial-form" style="display: none;"></div>
<div class="s-container">
  <div class="nav mb-0">
    <div id="title-bloc">
      <div style="margin-right: 8px">
        <img src="assets/media/img/logo.png" alt="" style="width: 32px; margin-top: 6px">
      </div>
      <h1 id="title" style="background: none"><a href="index.php">Starlight Map</a></h1>
    </div>
    <div>
      <ul class="menu">
        <li><a href="./editor" class="activated">Create a star map</a></li>
        <li><a href="./about">About Us</a></li>
        <li><a href="./contact">Contact</a></li>
      </ul>
    </div>
  </div>
</div>

<section style="padding-bottom: 250px; background: white" class="pt-5">
  <div class="container h-100">
    <div class="row h-100 justify-content-center mx-auto">
      <div class="col-sm-8">
        <div id="custom-card-canvas">
          <div class="custom-card portrait cpimg" id="custom-card-canvas2">

            <div id="stars-image"></div>
            <div class="user-image">
              <img id="imagePreview" src="assets/front/images/img-placeholder.png">
            </div>
            <div class="texts">
              <h1 class="text-content"></h1>
              <p class="place-name">Place Name Here</p>
              <p class="date"></p>
              <p class="long-lat"><span class="long"></span>, <span class="lat"></span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <form method='POST' action='<?php echo base_url('ecommerce'); ?>'>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" onclick="tab('moment')">
            <span class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                  aria-selected="true">Moment</span>
            </li>
            <li class="nav-item" onclick="tab('text')">
            <span class="nav-link" id="text-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                  aria-selected="false">Text</span>
            </li>
            <li class="nav-item" onclick="tab('contact')">
            <span class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                  aria-selected="false">Contact</span>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="moment" role="tabpanel" aria-labelledby="home-tab">
              <div class="">Please, give us the details of your special moment.</div>
              <div class="mt-3"><strong>Where were you looking at the sky?</strong></div>
              <input type="text" id="map-location" placeholder="Type in an address" class="w-100 mt-1"
                     style="background: #E6E6E6; border: 1px solid gray" autocomplete="off" name='map_diplay_address'>
              <div class="mt-3"><strong>When was your special moment?</strong></div>
              <div class="d-flex justify-content-between mt-2" style="visibility: visible;">
                <div id="map_day">
                  <select name="map_day" class="p-2" style="background: #E6E6E6">
                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div id="map_month">
                  <select name="map_month" class="p-2" style="background: #E6E6E6">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11" selected>November</option>
                    <option value="12">December
                    </option>
                  </select>
                </div>
                <div id="map_year">
                  <select name="map_year" class="p-2" style="background: #E6E6E6">
                    <?php for ($i = 1900; $i <= 2053; $i++) : ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <div id="map_times">
                  <select name="map_times" class="p-2" style="background: #E6E6E6">
                    <?php for ($i = 0; $i <= 23; $i++) : ?>
                      <option value="<?= $i ?>"><?= $i ?>.00</option>
                    <?php endfor; ?>
                  </select>
                </div>
              </div>
              <br>
            </div>
            <div class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="profile-tab">
              <div>Add your message, title, and footnote to make it more personal</div>
              <div class="mt-3">Enter your personal message</div>
              <textarea id="map-message" rows="5" class="w-100" name="map_custom_text"></textarea>
              <div class="mt-3">Title</div>
              <input type="text" id="map-title" name="map_place" class="w-100" placeholder="Title">
              <div class="mt-3">Subtitle</div>
              <input type="text" id="map-title" name="map_subtitle" value="New York" class="w-100"
                     placeholder="Subtitle">
              <div class="mt-3">Subtitle</div>
              <div class="d-flex align-items-center">
                <div class="px-2 py-1" style="background: #CCCCCC;border: 1px solid gray; border-right: none">http://
                </div>
                <input type="file" class="flex-grow-1 py-1 form-control"
                       style="background: #E6E6E6; border: 1px solid gray" name="map_subtitle_link"
                       id="map-intmess" pattern="http://">
              </div>
              <button class="small mt-1 border-1">Enter any external link (instagram post, youtub video, etc</button>
              <br>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="step block3" style="display: block;">
                <div class="hint">Customize your design by selecting a template, size, frame and additional features of
                  your star map.
                </div>
                <div class="mstep4">
                  <label>Select the template of your star map</label>
                  <div class="themes-group">
                    <ul id="map-themes"
                        style="padding-bottom: 91.2px;list-style: none; display: grid; grid-template-columns: repeat(5,1fr); gap: 8px">
                      <li id="map-theme2" class="col" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme2.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme2_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme2.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme2_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme1" style="height: 76px;" class="col">
                        <picture>
                          <source type="image/jpg"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme1.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme1_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme1.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme1_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme14" style="height: 76px;" class="col">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme14.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme14_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme14.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme14_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme10" style="height: 76px;" class="col">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme10.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme10_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme10.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme10_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme11" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme11.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme11_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme11.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme11_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme12" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme12.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme12_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme12.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme12_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme7" style="height: 76px;" class="">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme7.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme7_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme7.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme7_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme21" style="height: 76px;" class="">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme21.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme21_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme21.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme21_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme22" style="height: 76px;" class="">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme22.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme22_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme22.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme22_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme15" style="height: 76px;" class="">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme15.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme15_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme15.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme15_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme17" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme17.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme17_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme17.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme17_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme16" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme16.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme16_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme16.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme16_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme18" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme18.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme18_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme18.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme18_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme8" style="height: 76px;" class="selected">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme8.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme8_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme8.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme8_2x.jpg"
                               alt=""></picture>
                      </li>
                      <li id="map-theme3" style="height: 76px;">
                        <picture>
                          <source type="image/webp"
                                  srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme3.webp 1x, https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme3_2x.webp 2x ">
                          <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme3.jpg"
                               srcset="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme3_2x.jpg"
                               alt=""></picture>
                      </li>
                    </ul>
                    <div id="hideshow" style="height: 91.2px;">
                      <div>Show less <i class="arrow-up"></i></div>
                    </div>
                  </div>
                </div>
                <div class="mstep5 hides">
                  <input type="checkbox" class="checkbox" id="map-pdf-only"><label for="map-pdf-only" class="hint2">
                    <span class="map-pdf-only">Digital version only <strong>(63% OFF)</strong></span>
                  </label>
                  <span class="mobile_hint" style="display: none;">You will receive a PDF file right after the purchase. If you wish to receive a printed/framed copy to your chosen address, please, unselect this checkbox</span>
                </div>
                <div class="mb-3 nopdf d-flex w-100 rounded-pill" style="background: lightgrey">
                  <div class="py-2 px-3 radio-type">
                    <input value="0" name="typePoster" type="radio" id="poster" checked=""><label class="radio_label"
                                                                                                  for="poster">Poster</label>
                  </div>
                  <div class="py-2 px-3 radio-type">
                    <input value="1" name="typePoster" type="radio" id="canvas"><label class="radio_label" for="canvas">Canvas</label>
                  </div>
                </div>

                <div class="d-flex w-100 justify-content-between mb-1" style="color: black">
                  <div class="radio">
                    <input value="Without frame" name="map_style_poster" type="radio" id="Without frame" checked><label
                        class="radio_label" for="without">&nbsp;Without frame</label>
                  </div>
                  <div class="radio">
                    <input value="Frame" name="map_style_poster" type="radio" id="Frame"><label class="radio_label"
                                                                                                for="frame">&nbsp;Frame</label>
                  </div>
                  <div class="radio">
                    <input value="Hanger" name="map_style_poster" type="radio" id="Hanger"><label class="radio_label"
                                                                                                  for="hanger">&nbsp;Hanger</label>
                  </div>

                </div>
                <div class="radio-group-decal nopdf hide">
                  <div class="radio">
                    <input class="radio_input-poster" value="0" name="styleDecal" type="radio" id="matte"
                           checked=""><label class="radio_label" for="matte">Matte</label>
                  </div>
                  <div class="radio">
                    <input class="radio_input-poster" value="1" name="styleDecal" type="radio" id="glossy"><label
                        class="radio_label" for="glossy">Glossy</label>
                  </div>
                </div>
                <div class="nopdf">
                  <div class="mstep7 noCanvasDecal w-100 mb-2 py-2">
                    <label>Select frame</label>
                    <select name="map_frame" class="w-100 py-2" style="background: lightgrey">
                      <option value="0">Black Thick Frame</option>
                      <option value="1">White Thick Frame</option>
                    </select></div>

                  <div class="mstep6 w-100 py-2">
                    <label>Select size</label>
                    <select name="map_size" class="w-100 py-2" style="background: lightgrey">
                      <option value="0">12 x 16 in (30 x 40 cm)</option>
                      <option value="1">16 x 24 in (40 x 60 cm)</option>
                      <option value="2">24 x 36 in (60 x 90 cm)</option>
                    </select></div>

                  <div class="mstep5 priority_wrap">
                    <input type="checkbox" class="checkbox" id="priority"><label for="priority" class="hint2">
                      <span class="priority">Priority processing (1 day) <strong>+20$</strong></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <button class="btn btn-default">Previous</button>
            <button class="btn btn-success" type="submit">Next</button>
          </div>
        </form>
        <script>
          function tab(name) {
            $(`.nav-link`).removeClass('active')
            $(`.tab-pane`).removeClass('show').removeClass('active')
            $(`#${name}-tab`).addClass('active')
            $(`#${name}`).addClass('show active')
          }
        </script>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">


  // const fileInput = document.getElementById('file-input');
  const imagePreview = document.getElementById('imagePreview');

  // fileInput.addEventListener('change', function () {
  //   const selectedFile = fileInput.files[0];
  //
  //   if (selectedFile) {
  //     const reader = new FileReader();
  //
  //     reader.onload = function (event) {
  //       imagePreview.src = event.target.result;
  //     };
  //
  //     reader.readAsDataURL(selectedFile);
  //   } else {
  //     // Handle the case where no file is selected or the selected file is not an image.
  //     imagePreview.src = "";
  //   }
  // });


  var DATE = new Date("2022-08-25T04:00:00+0000");
  var LAT = 95.525321;
  var LONG = -455.815916;
  const FONT = "Raleway";
  var place_name = 'Enter Place Name';

  var config = {
    container: "celestial-form",
    width: 1024,
    datapath: '<?php echo base_url('assets/front/d3-celestial-master/data/');?>',
    form: false,
    advanced: false,
    interactive: false,
    disableAnimations: true,

    zoomlevel: null,
    zoomextend: 5,

    projection: "airy",
    transform: "equatorial",

    follow: "zenith",
    geopos: [LAT, LONG],

    lines: {
      graticule: {show: false},
      equatorial: {show: false},
      ecliptic: {show: false},
      galactic: {show: false},
      supergalactic: {show: false}
    },

    planets: {
      show: false,
      which: ["mer", "ven", "ter", "lun", "mar", "jup", "sat"],

      symbolType: "disk",
      names: false,
      nameStyle: {
        fill: "#00ccff",
        font: `14px ${FONT}`,
        align: "center",
        baseline: "top"
      },
      namesType: "en"
    },

    dsos: {
      show: false,
      names: false
    },

    constellations: {
      names: false,
      namesType: "iau",
      nameStyle: {
        fill: "#ffffff",
        align: "center",
        baseline: "middle",
        font: [`14px ${FONT}`, `8px ${FONT}`, `0px ${FONT}`]
      },
      lines: true,
      lineStyle: {stroke: "#cccccc", width: 1, opacity: 0.4}
    },

    mw: {
      show: false,
      style: {fill: "#ffffff", opacity: 0.02}
    },

    background: {
      fill: "#000000",
      stroke: "#ffffff",
      opacity: 1,
      width: 4
    },

    stars: {
      colors: true,
      size: 10,
      limit: 60,
      exponent: -0.30,
      designation: false,

      propername: false,
      propernameType: "name",
      propernameStyle: {
        fill: "#000000",
        font: `8px ${FONT}`,
        align: "right",
        baseline: "center"
      },
      propernameLimit: 2.0
    }
  };

  Celestial.display(config);
  Celestial.skyview({date: DATE});

  // console.log(Celestial.rotate());

  map_draw();

  function map_draw() {
    Celestial.exportSVG((val) => {
      console.log(val);
      $('#stars-image').html(val);
    });

    const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var date_text = DATE.getDate() + ' ' + month[DATE.getMonth()] + ' ' + DATE.getFullYear();

    $('.custom-card .texts .long-lat .lat').html(LAT + ' °E');
    $('.custom-card .texts .long-lat .long').html(LONG + ' °N');
    $('.custom-card .texts .date').html(date_text);
    $('.custom-card .texts .place-name').html(place_name);
    setfont_size();
    setText();
  }


  $('.tent-input').on('keyup', function () {
    setText();
  });

  function setText() {
    $('.text-content-input').val($('.text-content-input').val().toUpperCase());
    $('.custom-card .texts .text-content').text($('.text-content-input').val().toUpperCase());
  }

  $(window).on('resize', function () {
    setfont_size();
  });

  function setfont_size() {
    var custom_card_width = $('.custom-card').outerWidth();
    text_font_size = custom_card_width / 40;
    date_font_size = custom_card_width / 50;


    $('.custom-card .texts .text-content').css('font-size', text_font_size + 'px');
    $('.custom-card .texts .long-lat').css('font-size', date_font_size + 'px');
    $('.custom-card .texts .date').css('font-size', date_font_size + 'px');
    $('.custom-card .texts .place-name').css('font-size', date_font_size + 'px');
  }


  const saveData = (fileName, data) => {
    var a = document.createElement("a");
    document.body.appendChild(a);
    a.style = "display: none";

    const blob = new Blob([data], {type: "octet/stream"});
    const url = window.URL.createObjectURL(blob);
    a.href = url;
    a.download = fileName;
    a.click();
    window.URL.revokeObjectURL(url);
    a.remove();
  };

  const btn = document.getElementById("btn_download");
  btn.addEventListener("click", () => {
    Celestial.exportSVG((val) => {
      //saveData("map.svg", val);
      $('#stars-image').html(val);
    });
  });


  colors();
  sizes();
  $('.colors input[name=color]').on('change', function () {
    colors();
  });


  $('.sizes input[name=size]').on('change', function () {
    sizes();
  });

  function colors() {

    $('.colors label').removeClass('selected');
    $('.colors input[name=color]').each(function () {
      var color = $(this).val();
      $(this).parents('label').css('background-color', color);
      if (color == $('.colors input[name=color]:checked').val()) {
        $(this).parents('label').addClass('selected');
        $('.custom-card').css({
          'background-color': $('.colors input[name=color]:checked').val()
        });

        config.background.fill = $('.colors input[name=color]:checked').val();
        Celestial.apply(config);
        map_draw();
      }
    });
  }


  function sizes() {
    $('.sizes label').removeClass('selected');
    $('.custom-card').removeClass('portrait').removeClass('landscape').removeClass('square')
    $('.sizes input[name=size]').each(function () {
      let size = $(this).val();
      if (size === $('.sizes input[name=size]:checked').val()) {
        $(this).parents('label').addClass('selected');
        $('.custom-card').addClass(size);
      }
    });
  }

</script>
<script type="text/javascript">
  function initAutocomplete() {

    // Create the search box and link it to the UI element.
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);


    let markers = [];

    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
      const places = searchBox.getPlaces();

      if (places.length === 0) {
        return;
      }

      // Clear out the old markers.
      markers.forEach((marker) => {
        marker.setMap(null);
      });
      markers = [];

      // For each place, get the icon, name and location.
      const bounds = new google.maps.LatLngBounds();

      places.forEach((place) => {
        if (!place.geometry || !place.geometry.location) {
          console.log("Returned place contains no geometry");
          return;
        }

        LAT = place.geometry.location.lat();
        LONG = place.geometry.location.lng();

        var i = 0;
        timeout = setInterval(function () {
          i++;
          Celestial.location([LAT, LONG]);
          Celestial.redraw();
          map_draw();

          if (i === 2) {
            clearInterval(timeout);
          }
        }, 500);

        $('.address-text').val(place.formatted_address).change();

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });


    });
  }

  window.initAutocomplete = initAutocomplete;

  $('.address-text').on('change keyup', function () {
    place_name = $(this).val();
    $('.custom-card .texts .place-name').text(place_name);
  });

</script>
<script src="<?php echo base_url('assets/front/dom-to-image-master/src/'); ?>dom-to-image.js"/>
<script>
  domtoimage.toPng(node)
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeBtFJf_j0R6uyLMGz6jgXfmbdZ5BEuCM&callback=initAutocomplete&libraries=places&v=weekly"
    defer></script>
<script type="text/javascript">
  $(".flat-picker").flatpickr({
    enableTime: true,
    onChange: function (selectedDates, dateStr, instance) {
      DATE = new Date(dateStr);
      Celestial.skyview({date: DATE});
      Celestial.redraw();
      map_draw();
    },
    onOpen: [
      function (selectedDates, dateStr, instance) {
        //...
      },
      function (selectedDates, dateStr, instance) {
        //...
      }
    ],
    onClose: function (selectedDates, dateStr, instance) {
      // ...
    }

  });


  function filter(node) {
    return (node.tagName !== 'i');
  }


  function getSVG() {
    domtoimage.toSvg(document.getElementById('custom-card-canvas'), {filter: filter})
      .then(function (dataUrl) {
        console.log(dataUrl);
      });
  }

</script>
<script>
  html2canvas(document.querySelector('#cpimg')).then(canvas => {
    document.body.appendChild(canvas)
  })
</script>
<?php
if ($this->session->userdata('map_id') == true) {
  $this->session->unset_userdata('map_id');
}
?>