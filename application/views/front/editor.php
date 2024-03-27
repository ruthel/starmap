<title>Starlight editor</title>
<body>
<script>
  var noPrint = true;
  var noScreenshot = true;
  var noCopy = true;
  var autoBlur = false
</script>
<script type="text/javascript" src="https://pdfanticopy.com/noprint.js"></script>
<script src="<?= base_url('assets/front/d3-celestial-master/lib/') ?>d3.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html-to-image/1.11.11/html-to-image.js"></script>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lz-string/1.5.0/lz-string.min.js"></script>
<script src="<?php echo base_url('assets/front/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/front/'); ?>js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
<script src="<?= base_url('assets/front/d3-celestial-master/lib/') ?>d3.geo.projection.min.js"></script>
<script src="<?= base_url('assets/front/d3-celestial-master/') ?>celestial.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url('assets/front/d3-celestial-master/') ?>celestial.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/dexie/dist/dexie.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="assets/css/editor.css">
<link rel="stylesheet" href="assets/css/main.css">

<div style="overflow:hidden;margin:0 auto;display: none;">
  <div id="celestial-map"></div>
</div>
<div id="waiter" style="display: none">
  <?php include("waiter.html") ?>
</div>
<div id="celestial-form" style="display: none;"></div>
<div class="s-container">
  <?php include('inc/menu.php') ?>
</div>
<div id="loader-container">
</div>

<script>

  const loaderContainer = document.getElementById('loader-container');
  loaderContainer.innerHTML = `<?php include 'loader.html'; ?>`;

  function init_celestial(index) {
    let url = ''
    switch (index) {
      case 0:
        url = 'url(\'assets/media/img/circle-frame.png\')'
        break
      case 1:
        url = 'url(\'assets/media/img/circle-frame-black.png\')'

    }
    $('#stars-image').css('background-image', url)
    // document.getElementById('stars-image').style.backgroundImage = url
    let style = document.getElementById('custom-card-canvas2').style
    document.getElementById('custom-card-canvas2').style.color = configs[index].stroke_bg + ' !important'
    style.setProperty('--background', configs[index].fill_bg);


    $('.text-content').css('color', configs[index].stroke_bg)
    $('.place-name').css('color', configs[index].stroke_bg)
    $('.date').css('color', configs[index].stroke_bg)
    $('.long-lat').css('color', configs[index].stroke_bg)
    $('#title-card').css('color', configs[index].stroke_bg)

    let config = {
      container: "celestial-form",
      width: 1024,
      datapath: '<?= base_url('assets/front/d3-celestial-master/data/')?>',
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
          fill: configs[index].constellations,
          align: "center",
          baseline: "middle",
          font: [`14px ${FONT}`, `8px ${FONT}`, `0px ${FONT}`]
        },
        lines: true,
        lineStyle: {
          stroke: configs[index].lineStyle, width: 1, opacity: 1//0.4
        }
      },

      mw: {
        show: false,
        style: {
          fill: configs[index].stroke_bg, opacity: 1 //0.02
        }
      },

      background: {
        fill: configs[index].fill_bg,
        stroke: configs[index].stroke_bg,
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
          fill: configs[index].fill_bg,
          font: `8px ${FONT}`,
          align: "right",
          baseline: "center"
        },
        propernameLimit: 2.0
      }
    };
    Celestial.display(config);
    Celestial.skyview({date: DATE});
    map_draw();
  }

  // Function to remove the loader after page load (optional)
  function removeLoader() {
    setTimeout(() => {
      loaderContainer.style.display = 'none';
    }, 1000)
  }

  window.addEventListener('load', removeLoader);
</script>
<form style="padding-bottom: 250px; background: white; position: relative" class="" method='POST'
      onsubmit="submitMap(event)" action='<?= base_url('ecommerce') ?>' id="myform">
  <div class="h-100">
    <div style="display: flex; position: relative" id="editor-box" class="h-100 justify-content-center mx-auto w-100">
      <div id="main-map">
        <div id="custom-card-canvas"
             style="display: flex;align-items: center;justify-content: center;margin-top: 6%">
          <div class="custom-card portrait cpimg" id="custom-card-canvas2"
               style="margin: 0;width: 18vw; height: 48.6vh">
            <div style="z-index: 2; position: relative">
              <div style="padding: 0 24px">
                <div id="stars-image"
                     style="background-image: url('assets/media/img/circle-frame.png'); background-position: 50%;background-repeat: no-repeat; background-size: contain; padding:6%"></div>
              </div>
              <div class="user-image">
                <img id="imagePreview" src="assets/front/images/img-placeholder.png" style="display: none">
              </div>
              <div class="texts">
                <h1 class="text-content"></h1>
                <p class="place-name">Place Name Here</p>
                <p class="date"></p>
                <p class="long-lat"><span class="long"></span>, <span class="lat"></span></p>
                <p id="title-card" style="color: white; font-weight: bold; margin-top: 8px"></p>
              </div>
              <div id="qrcode" class="mt-3"
                   style="clear: left; display: flex;align-items: center;justify-content: center"></div>
              <style>
                  #qrcode canvas {
                      display: block !important;
                      height: 36px;
                  }

                  #qrcode img {
                      display: none !important;
                  }
              </style>
            </div>
          </div>
        </div>
      </div>
      <div style="padding: 12px; max-width: 400px; position: relative">
        <div>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" onclick="tab('moment')">
            <span class="nav-link active" id="moment-tab" data-toggle="tab" role="tab" aria-controls="home"
                  aria-selected="true">Moment</span>
            </li>
            <li class="nav-item" onclick="tab('text')">
            <span class="nav-link" id="text-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                  aria-selected="false">Text</span>
            </li>
            <li class="nav-item" onclick="tab('contact')">
            <span class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                  aria-selected="false">Customize</span>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="moment" role="tabpanel" aria-labelledby="home-tab">
              <br>
              <div class=""><strong>Please, give us the details of your special moment.</strong></div>
              <div class="mt-3"><strong>Where were you looking at the sky?</strong></div>
              <input type="text" id="map-location" placeholder="Type in an address"
                     class="w-100 mt-1 py-2 rounded px-2 border"
                     style="background: whitesmoke" autocomplete="off"
                     name='map_diplay_address'>
              <div class="mt-3"><strong>When was your special moment?</strong></div>
              <div class="d-flex justify-content-between mt-2" style="visibility: visible;">
                <div>
                  <div><strong>Day</strong></div>
                  <div id="map_day">
                    <select name="map_day" id="map_day" class="p-2 rounded border" style="background: whitesmoke">
                      <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div>
                  <div><strong>Month</strong></div>
                  <div id="map_month">
                    <select name="map_month" id="map_month" class="p-2 rounded border" style="background: whitesmoke">
                      <option value="0">January</option>
                      <option value="1">February</option>
                      <option value="2">March</option>
                      <option value="3">April</option>
                      <option value="4">May</option>
                      <option value="5">June</option>
                      <option value="6">July</option>
                      <option value="7">August</option>
                      <option value="8">September</option>
                      <option value="9">October</option>
                      <option value="10" selected>November</option>
                      <option value="11">December</option>
                    </select>
                  </div>
                </div>
                <div>
                  <div><strong>Year</strong></div>
                  <div id="map_year">
                    <select name="map_year" id="map_year" class="p-2 rounded border" style="background: whitesmoke">
                      <?php for ($i = 1900; $i <= 2053; $i++) : ?>
                        <option <?= date("Y") == $i ? 'selected' : '' ?> value="<?= $i ?>"><?= $i ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
                <div>
                  <div><strong>Time</strong></div>
                  <div id="map_times">
                    <select name="map_times" id="map_hour" class="p-2 rounded border" style="background: whitesmoke">
                      <?php for ($i = 0; $i <= 23; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?>.00</option>
                      <?php endfor; ?>
                    </select>
                  </div>
                </div>
              </div>
              <br>
              <button class="btn btn-success" type="button" onclick="tab('text')">Next</button>
            </div>
            <div class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="profile-tab">
              <div>Add your title, and footnote to make it more personal</div>
              <label class="mt-3" for="map-title">Title</label>
              <input type="text" id="map-title" name="map_place" class="w-100 p-2 rounded border" placeholder="Title"
                     onkeyup="setTitle(event)"/>
              <div class="mt-3">Link</div>
              <div class="d-flex align-items-center">
                <div class="p-2 border rounded-start" style="background: #CCCCCC; border-right: none">http://
                </div>
                <input type="text" class="flex-grow-1 p-2 border rounded-end"
                       onkeyup="qrcode(event)"
                       style="background: whitesmoke;" id="map-intmess">
              </div>
              <button class="small mt-1 border-1 rounded border" style="font-size: 12px" type="button">Enter any
                external link
                (instagram post, youtube video, etc
              </button>
              <div class="mt-3"><strong>Image to upload</strong></div>
              <input type="file" id="file-input" accept="image/*" class="w-100 mt-1 mb-3 py-2 rounded px-2 border"
                     style="background: whitesmoke">
              <br>
              <br>
              <button class="btn btn-success" type="button" onclick="tab('contact')">Next</button>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="step block3" style="display: block;">
                <div class="hint mb-3">Customize your design by selecting a template, size, frame and additional
                  features of
                  your star map.
                </div>
                <div class="mstep4">
                  <label><strong>Select the template of your star map</strong></label>
                  <div class="themes-group mb-3 mt-1">
                    <ul id="map-themes" class="p-0"
                        style="list-style: none; display: grid; grid-template-columns: repeat(5,1fr); gap: 8px">
                      <li class="col" style="height: 76px;" onclick="init_celestial(0)">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme2.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="col" onclick="init_celestial(1)">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme1.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="col" onclick="">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme14.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="col">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme10.jpg" alt="">
                      </li>
                      <li style="height: 76px;">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme11.jpg" alt="">
                      </li>
                      <li style="height: 76px;">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme12.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme7.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme21.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme22.jpg" alt="">
                      </li>
                      <li style="height: 76px;" class="">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme15.jpg" alt="">
                      </li>
                      <li style="height: 76px;">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme17.jpg" alt="">
                      </li>
                      <li id="map-theme16" style="height: 76px;">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme16.jpg" alt="">
                      </li>
                      <li id="map-theme18" style="height: 76px;">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme18.jpg" alt="">
                      </li>
                      <li id="map-theme8" style="height: 76px;" class="selected">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme8.jpg" alt="">
                      </li>
                      <li id="map-theme3" style="height: 76px;">
                        <img src="https://cdn.cosmonova.org/bts/images/constructor/other/cert_theme3.jpg" alt="">
                      </li>
                    </ul>
                    <div id="hideshow" class="text-center small">
                      <div><strong>Show less</strong></div>
                    </div>
                  </div>
                </div>
                <div class="nopdf">
                  <div class="mstep6 w-100 py-2">
                    <label for="map_size"><strong>Select size</strong></label>
                    <select id="map_size" name="map_size" class="w-100 py-2 rounded border"
                            style="background: whitesmoke">
                      <option value="12 x 16 in (30 x 40 cm)" selected>12 x 16 in (30 x 40 cm)</option>
                      <option value="16 x 24 in (40 x 60 cm)">16 x 24 in (40 x 60 cm)</option>
                      <option value="24 x 36 in (60 x 90 cm)">24 x 36 in (60 x 90 cm)</option>
                    </select></div>

                  <!--                  <div class="mstep5 priority_wrap">-->
                  <!--                    <input type="checkbox" class="checkbox" id="priority"><label for="priority" class="hint2">-->
                  <!--                      <span class="priority small">Priority processing (1 day) <strong>+20$</strong></span>-->
                  <!--                    </label>-->
                  <!--                  </div>-->
                  <br>
                </div>
              </div>
              <div>
                <button class="btn btn-success" type="submit" id="submitter">Submit</button>
              </div>
            </div>
          </div>
        </div>
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
</form>
<script type="text/javascript">
  function qrcode(event) {
    $('#qrcode').html('')
    new QRCode(document.getElementById("qrcode"), {
      text: event.target.value,
      width: 500,
      height: 500,
      correctLevel: QRCode.CorrectLevel.H
    });
  }

  const fileInput = document.getElementById('file-input');
  const imagePreview = document.getElementById('imagePreview');
  fileInput.addEventListener('change', () => {
    if (fileInput.files[0])
      imagePreview.style.display = 'initial'
    const selectedFile = fileInput.files[0];
    if (selectedFile) {
      const reader = new FileReader();
      reader.onload = event => imagePreview.src = event.target.result;
      reader.readAsDataURL(selectedFile);
    } else {
      imagePreview.src = "";
      imagePreview.style.display = 'none'
    }
  });

  let generatedMap = false
  let hasShipping = false

  function submitMap(ev) {
    // if (!hasShipping) {
    //   ev.preventDefault()
    //   $('#shipping-address').css('display', 'block')
    // } else {
    if (!generatedMap) {
      ev.preventDefault()
      $("#submitter").prop('disabled', true);
      $('#submitter').text('Submitting ...')
      $('#waiter').css("display", "block");
      setTimeout(() => {
        generateImg()
      }, 10)
    } else {
      $("#submitter").prop('disabled', false);
      $('#submitter').text('Submit')
      let d_a = $('#myform').serializeArray()
      if (d_a.map(e => e.value).includes("")) {
        ev.preventDefault()
        alert("Fill all the field please !")
      }
    }
    // }
  }

  const configs = [
    {constellations: '#ffffff', fill_bg: '#000000', stroke_bg: '#ffffff', lineStyle: '#cccccc'},
    {constellations: '#000000', fill_bg: '#ffffff', stroke_bg: '#000000', lineStyle: '#000000'}
  ]


  let DATE = new Date(new Date().getFullYear(), 10, 1);
  let LAT = 0;
  let LONG = 0;
  const FONT = "Raleway";
  let place_name = "Enter Place Name";


  init_celestial(0)

  function setTitle(event) {
    $('#title-card').html(event.target.value)
  }

  $('#map_month').val(DATE.getMonth())
  document.getElementById('map_month').onchange = (e) => {
    DATE.setMonth(e.target.value)
    Celestial.display(config);
    Celestial.skyview({date: DATE});
    map_draw();
  }

  $('#map_day').val(DATE.getDate())
  document.getElementById('map_day').onchange = (e) => {
    DATE.setDate(e.target.value)
    Celestial.display(config);
    Celestial.skyview({date: DATE});
    map_draw();
  }

  $('#map_year').val(DATE.getFullYear())
  document.getElementById('map_year').onchange = (e) => {
    DATE.setFullYear(e.target.value)
    Celestial.display(config);
    Celestial.skyview({date: DATE});
    map_draw();
  }

  $('#map_hour').val(DATE.getHours())
  document.getElementById('map_hour').onchange = (e) => {
    DATE.setHours(e.target.value)
    Celestial.display(config);
    Celestial.skyview({date: DATE});
    map_draw();
  }

  const db = new Dexie('StarMap');
  db.version(1).stores({images: '++id, key, value'});
  db.images.clear()

  function generateImg() {
    html2canvas(document.querySelector("#custom-card-canvas2"), {
      scale: 20,
      allowTaint: true,
      useCORS: true
    }).then(canvas => {
      let data_10 = canvas.toDataURL('image/png', .9)
      db.images.bulkPut([{key: 'image', value: data_10}]).then(ok => {
        generatedMap = true
        $('#myform').submit()
      })

    });
  }

  function map_draw() {
    Celestial.exportSVG((val) => {
      $('#stars-image').html(val);
    });

    const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let date_text = DATE.getDate() + ' ' + month[DATE.getMonth()] + ' ' + DATE.getFullYear();

    $('.custom-card .texts .long-lat .lat').html(parseFloat(LAT).toFixed(4) + ' E');
    $('.custom-card .texts .long-lat .long').html(parseFloat(LAT).toFixed(4) + ' N');
    $('.custom-card .texts .date').html(date_text);
    $('.custom-card .texts .place-name').html(place_name);
    setfont_size();
    setText();
  }


  $('.tent-input').on('keyup', () => setText());

  function setText() {
    $('.text-content-input').val($('.text-content-input').val()?.toUpperCase());
    $('.custom-card .texts .text-content').text($('.text-content-input').val()?.toUpperCase());
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
</script>
<script type="text/javascript">
  function initAutocomplete() {

    // Create the search box and link it to the UI element.
    const input = document.getElementById("map-location");
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
        timeout = setInterval(() => {
          i++;
          Celestial.location([LAT, LONG]);
          Celestial.redraw();
          map_draw();

          if (i === 2) {
            clearInterval(timeout);
          }
        }, 500);

        place_name = place.formatted_address
        $('.custom-card .texts .place-name').text(place_name);

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


  document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
    if (keyCode == 44) {
      document.body.style.display = 'none'
      stopPrntScr();
    }
    if (e.key == 'PrintScreen') {
      e.preventDefault()
      document.body.style.display = 'none'
      navigator.clipboard.writeText('');
    }
  });

  function stopPrntScr() {
    var inpFld = document.createElement("input");
    inpFld.setAttribute("value", ".");
    inpFld.setAttribute("width", "0");
    inpFld.style.height = "0px";
    inpFld.style.width = "0px";
    inpFld.style.border = "0px";
    document.body.appendChild(inpFld);
    inpFld.select();
    document.execCommand("copy");
    inpFld.remove(inpFld);
  }

  function AccessClipboardData() {
    try {
      window.clipboardData.setData('text', "Access Restricted");
    } catch (err) {
    }
  }

  setInterval("AccessClipboardData()", 300);

</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCREYpGLVxgAM0EhQW7e7r7Gb83CNpQnkA&callback=initAutocomplete&libraries=places&v=weekly"
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
</script>
<?php
if ($this->session->userdata('map_id') == true) {
  $this->session->unset_userdata('map_id');
}
?>
</body>