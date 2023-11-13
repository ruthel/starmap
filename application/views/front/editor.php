
  <script type="text/javascript" src="<?php echo base_url('assets/front/d3-celestial-master/lib/');?>d3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/front/d3-celestial-master/lib/');?>d3.geo.projection.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/front/d3-celestial-master/');?>celestial.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/d3-celestial-master/');?>celestial.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

  <style type="text/css">
  .colors label.selected {
    border: 3px double white;
  }
  #stars-image{
    max-width: 100%;
    max-height: 100%;
    margin: 0 auto;
  }
  #stars-image svg{
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
  transition-duration: .4s;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  align-content: center;
  box-shadow: 1px 1px 8px 8px #0000003b;
  margin: 0 auto;
  transition-duration: .5s;
}

.custom-card.portrait{
  aspect-ratio: 193 / 258;
}


.custom-card.landscape{
  aspect-ratio: 272 / 201;
}

.custom-card.square{
  aspect-ratio: 1 / 1;
}

.custom-card.landscape #stars-image {max-width: 70%;max-height: 70%;}

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
  margin-top: 10px;
  margin: 0;
}

.custom-card .texts .long-lat {
  font-size: 13px;
  font-weight: 400;
  color: #fff;
  margin-top: 10px;
  margin: 0;
}

.custom-card .texts .date {
  font-size: 13px;
  font-weight: 400;
  color: #fff;
  margin-top: 10px;
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
  background: url(assets/front/images/body-2.jpg);
  background-position: center;
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

.sizes label.selected{
  border-color: #fff;
}

label {
  color: #fff;
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


<style type="text/css">
  /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
#map {
  height: 100%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */

#description {
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
}

#infowindow-content .title {
  font-weight: bold;
}

#infowindow-content {
  display: none;
}

#map #infowindow-content {
  display: inline;
}

.pac-card {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  font-family: Roboto;
  padding: 0;
}

#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
}

.pac-controls {
  display: inline-block;
  padding: 5px 11px;
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

#target {
  width: 345px;
}
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <div style="overflow:hidden;margin:0 auto;display: none;"><div id="celestial-map"></div></div>
  <div id="celestial-form" style="display: none;" ></div>

  
  <section style="margin-top:250px;padding-bottom: 250px;">
    <div class="container h-100">
      <div class="row h-100 align-content-center justify-content-center">
        <div class="col-sm-9">
          <div id="custom-card-canvas">
            <div class="custom-card portrait cpimg" id="custom-card-canvas2">

              <div id="stars-image"></div>
              <div class="user-image">
                <img id="imagePreview" src="">
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
        <div class="col-sm-3">
    <form action='<?php echo base_url('ecommerce');?>' method='POST'>    
        <div class="form">


    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises
      with https://www.npmjs.com/package/@googlemaps/js-api-loader.
      -->
  



            <div class="form-group py-3">
                <label>Place / Location</label>
                <input type="text" class="location-search form-control" name='map_place' id="pac-input" placeholder="Search any place here...">
            </div>
            <div class="form-group py-3">
                <label>Size</label>
                <div class="sizes">
                  <label class="portrait"><input type="radio" name="size" value="portrait" checked=""></label>
                  <label class="landscape"><input type="radio" name="size" value="landscape"></label>
                  <label class="square"><input type="radio" name="size" value="square"></label>
                </div>
            </div>

            <div class="form-group py-3">
                <label>Background Color</label>
                <div class="colors">
                  <label><input type="radio" name="color" value="#000000" checked=""></label>
                  <label><input type="radio" name="color" value="#af3535"></label>
                  <label><input type="radio" name="color" value="#777419"></label>
                  <label><input type="radio" name="color" value="#288893"></label>
                  <label><input type="radio" name="color" value="#2d3b5c"></label>
                  <label><input type="radio" name="color" value="#572c67"></label>
                  <label><input type="radio" name="color" value="#193041"></label>
                  <label><input type="radio" name="color" value="#ffffff"></label>
                </div>
            </div>

            <div class="form-group py-3">
                <label>Display Address</label>
                <textarea class="address-text form-control" name='map_diplay_address'></textarea>
            </div>
            <div class="form-group py-3">
                <label>Select Date</label>
                <input type="text" class="date-text form-control flat-picker" name='map_date' required>
            </div>
            <div class="form-group py-3">
                <label>Your Image</label>
                <input type="file" id="file-input" class="form-control" name='user_image'>
            </div>
            <div class="form-group py-3">
                <label>Your Customized Text</label>
                <textarea class="text-content-input form-control" name='map_custom_text'></textarea>
            </div>                                                
            <div class="form-group pt-0">
              <button type='submit' class="btn btn-success" id="btn_download">Update</button>
            </div>
          </div>
        </div>
      </div>
  </form>
    </div>
  </section>

  

  
  
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>  

  <script type="text/javascript">


        const fileInput = document.getElementById('file-input');
        const imagePreview = document.getElementById('imagePreview');

        fileInput.addEventListener('change', function() {
            const selectedFile = fileInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    imagePreview.src = event.target.result;
                };

                reader.readAsDataURL(selectedFile);
            } else {
                // Handle the case where no file is selected or the selected file is not an image.
                imagePreview.src = "";
            }
        });




var DATE = new Date("2022-08-25T04:00:00+0000");
var LAT = 95.525321;
var LONG = -455.815916;
const FONT = "Raleway";
var place_name = 'Enter Place Name';

var config = {
  container: "celestial-form",
  width: 1024,
  datapath : '<?php echo base_url('assets/front/d3-celestial-master/data/');?>',
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
    graticule: { show: false },
    equatorial: { show: false },
    ecliptic: { show: false },
    galactic: { show: false },
    supergalactic: { show: false }
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
    lineStyle: { stroke: "#cccccc", width: 1, opacity: 0.4 }
  },

  mw: {
    show: false,
    style: { fill: "#ffffff", opacity: 0.02 }
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
Celestial.skyview({ date: DATE });

// console.log(Celestial.rotate());

map_draw();

function map_draw() {
  Celestial.exportSVG((val) => {
    console.log(val);
    $('#stars-image').html(val);
  }); 

  const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];  

  var date_text = DATE.getDate() + ' ' + month[DATE.getMonth()]+ ' ' + DATE.getFullYear();

  $('.custom-card .texts .long-lat .lat').html(LAT+' °E');
  $('.custom-card .texts .long-lat .long').html(LONG+' °N');
  $('.custom-card .texts .date').html(date_text);
  $('.custom-card .texts .place-name').html(place_name);
  setfont_size();
  setText();
}


$('.text-content-input').on('keyup',function(){
  setText();
});

function setText(){
  $('.text-content-input').val($('.text-content-input').val().toUpperCase());
  $('.custom-card .texts .text-content').text($('.text-content-input').val().toUpperCase());
}

$(window).on('resize',function(){
  setfont_size();  
});

function setfont_size(){
  var custom_card_width = $('.custom-card').outerWidth();
  text_font_size = custom_card_width / 40;
  date_font_size = custom_card_width / 50;


  $('.custom-card .texts .text-content').css('font-size',text_font_size+'px');
  $('.custom-card .texts .long-lat').css('font-size',date_font_size+'px');
  $('.custom-card .texts .date').css('font-size',date_font_size+'px');
  $('.custom-card .texts .place-name').css('font-size',date_font_size+'px');
}



  const saveData = (fileName, data) => {
    var a = document.createElement("a");
    document.body.appendChild(a);
    a.style = "display: none";

    const blob = new Blob([data], { type: "octet/stream" });
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
$('.colors input[name=color]').on('change',function(){
  colors();  
});


$('.sizes input[name=size]').on('change',function(){
  sizes();  
});

function colors(){
  
  $('.colors label').removeClass('selected');
  $('.colors input[name=color]').each(function(){
    var color = $(this).val();
    $(this).parents('label').css('background-color',color);
    if(color == $('.colors input[name=color]:checked').val()){
      $(this).parents('label').addClass('selected');
      $('.custom-card').css({
        'background-color':$('.colors input[name=color]:checked').val()
      });

     config.background.fill = $('.colors input[name=color]:checked').val();
      Celestial.apply(config);
      map_draw();
    }
  });  
}


function sizes(){
  
  $('.sizes label').removeClass('selected');
  $('.custom-card').removeClass('portrait');
  $('.custom-card').removeClass('landscape');
  $('.custom-card').removeClass('square');
  $('.sizes input[name=size]').each(function(){
    var size = $(this).val();
    if(size == $('.sizes input[name=size]:checked').val()){
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

    if (places.length == 0) {
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
        timeout = setInterval(function(){
          i++;
          Celestial.location([LAT, LONG]);
          Celestial.redraw();
          map_draw();

          if(i == 2){
            clearInterval(timeout);
          }
        },500);

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

$('.address-text').on('change keyup',function(){
  place_name = $(this).val();
  $('.custom-card .texts .place-name').text(place_name);
});

</script>


<script src="<?php echo base_url('assets/front/dom-to-image-master/src/');?>dom-to-image.js" />
<script>
  domtoimage.toPng(node)
  //...
</script>

  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeBtFJf_j0R6uyLMGz6jgXfmbdZ5BEuCM&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>

<script type="text/javascript">
  

$(".flat-picker").flatpickr({
    enableTime: true,
    onChange: function(selectedDates, dateStr, instance) {
        DATE = new Date(dateStr);
        Celestial.skyview({ date: DATE });
        Celestial.redraw();
        map_draw();
    },
    onOpen: [
        function(selectedDates, dateStr, instance){
            //...
        },
        function(selectedDates, dateStr, instance){
            //...
        }
    ],
    onClose: function(selectedDates, dateStr, instance){
       // ...
    }

});  




function filter (node) {
    return (node.tagName !== 'i');
}


function getSVG(){
  domtoimage.toSvg(document.getElementById('custom-card-canvas'), {filter: filter})
  .then(function (dataUrl) {
      console.log(dataUrl);
  });
}

</script>
  <script>
 function html2canvas(document.querySelector(“#cpimg”)).then(canvas
 {    
    document.body.appendChild(canvas)
 });
  </script>
  <?php
  if($this->session->userdata('map_id')==true){
    $this->session->unset_userdata('map_id');
  }
  ?>