<!DOCTYPE html>
@if(session()->get('locale')=='ar')
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Property Invest</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />-->
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"/>-->
 <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
      <script type="text/javascript" src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet-geosearch@3.3.2/dist/geosearch.css">
      <script type="text/javascript" src="https://unpkg.com/leaflet-geosearch@3.3.2/dist/geosearch.umd.js"></script>
    <link rel="stylesheet" href="/rtlcss/style.css" />
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!--bootstrap-file-->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
      rel="stylesheet" />
     
<link rel='stylesheet' href='https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css'>
@elseif(session()->get('locale')=='en')
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Property Invest</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />-->
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"/>-->
 <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
      <script type="text/javascript" src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet-geosearch@3.3.2/dist/geosearch.css">
      <script type="text/javascript" src="https://unpkg.com/leaflet-geosearch@3.3.2/dist/geosearch.umd.js"></script>
    <link rel="stylesheet" href="/css/style.css" />
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!--bootstrap-file-->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
      rel="stylesheet" />
     
<link rel='stylesheet' href='https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css'>
    @endif
   @stack('styles')
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 0, lng: 0},
                zoom: 2,
                disableDefaultUI: true, // Disables default UI elements
                styles: [
                    {
                        "featureType": "poi",
                        "stylers": [{ "visibility": "off" }]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [{ "visibility": "off" }]
                    },
                    {
                        "featureType": "administrative",
                        "stylers": [{ "visibility": "off" }]
                    },
                    {
                        "featureType": "road",
                        "stylers": [{ "visibility": "simplified" }]
                    },
                    {
                        "featureType": "water",
                        "stylers": [{ "color": "#aadaff" }]
                    },
                    {
                        "featureType": "landscape",
                        "stylers": [{ "color": "#efefef" }]
                    }
                ]
            });

            map.addListener('click', function(event) {
                var latLng = event.latLng;
                document.getElementById('latitude').value = latLng.lat();
                document.getElementById('longitude').value = latLng.lng();
                console.log('Latitude: ' + latLng.lat() + ', Longitude: ' + latLng.lng());
            });
        }
    </script>
    <style> 
        #map {
            height: 500px;
            width: 100%;
            display:none;
        }
         /* Style the search box */
        /*.pac-card {*/
        /*    margin: 10px;*/
        /*    border-radius: 2px 0 0 2px;*/
        /*    box-sizing: border-box;*/
        /*    -moz-box-sizing: border-box;*/
        /*    outline: none;*/
        /*    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);*/
        /*    background-color: #fff;*/
        /*    font-family: Roboto;*/
        /*}*/

        /*#pac-input {*/
        /*    background-color: #fff;*/
        /*    font-family: Roboto;*/
        /*    font-size: 15px;*/
        /*    font-weight: 300;*/
        /*    margin-left: 12px;*/
        /*    padding: 0 11px 0 13px;*/
        /*    text-overflow: ellipsis;*/
        /*    width: 300px;*/
        /*}*/

        /*#pac-input:focus {*/
        /*    border-color: #4d90fe;*/
        /*}*/
        #logo-input-1{
            display: none; /* Initially hidden */
        }
        #logo-title
        {
            display: none;
        }
        #developer_name {
            display: none; /* Initially hidden */
        }
        #delivery_date{
            display: none; /* Initially hidden */
        }
       #gj_datepicker
       {
            display: none;
       }
       .slider-container {
   position: relative;
   overflow: hidden;
   border-radius: 10px;
   -webkit-box-shadow: 0 0 20 rgba(0, 0, 0, 0.5);
   box-shadow: 0 0 20 rgba(0, 0, 0, 0.5);
   pointer-events: auto;
}
.slider {position: relative;}
.slide {
   width: 100%;
   /*height: 200px;*/
   background-color: #e6e6e6;
   float: left;
   position: relative;
   overflow: hidden;
}
/*img {width: 100%;height: 100%; }*/
.sliderBtn {
   width: 40px;
   height: 40px;
   background-color: rgba(255,255,255,0.3);
   border-radius: 100%;
   line-height: 43px;
   text-align: center;
   font-size: 20px;
   position: absolute;
   top: 50%;
   transform: translateY(-50%);
   z-index: 2;
   cursor: pointer;
   transition: all 0.5s ease;
}
.sliderBtn.prevBtn {left: 20px;}
.sliderBtn.nextBtn {right: 20px;}
.sliderBtn:hover {
   background-color: #fff;
}
    




    </style>
  </head>
  
  <body class="position-relative text-capitalize">
    <div class="overlay d-none"></div>
    <div class="more-filters bg-white d-none">
      <div class="border-bottom">
          <div class="d-flex justify-content-between align-items-center w-100 py-3 px-4">
            <h4 class="fw-bold" style="color:#3b3a5e ;">More Filters</h4>
            <svg class="svg-inline--fa fa-xmark text-light p-2 bg-danger" onclick="closeMoreFilters()" style="font-size: 15px;cursor: pointer;border-radius: 5px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeMoreFilters()" style="font-size: 15px;cursor: pointer;border-radius: 5px;"></i> Font Awesome fontawesome.com -->
          </div>
      </div>
      <div class="p-4 border-bottom">
        <h5 style="color:#3b3a5e ;"><svg class="svg-inline--fa fa-couch" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="couch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M592 224C565.5 224 544 245.5 544 272V352H96V272C96 245.5 74.51 224 48 224S0 245.5 0 272v192C0 472.8 7.164 480 16 480h64c8.836 0 15.1-7.164 15.1-16L96 448h448v16c0 8.836 7.164 16 16 16h64c8.836 0 16-7.164 16-16v-192C640 245.5 618.5 224 592 224zM128 272V320h384V272c0-38.63 27.53-70.95 64-78.38V160c0-70.69-57.31-128-128-128H191.1c-70.69 0-128 57.31-128 128L64 193.6C100.5 201.1 128 233.4 128 272z"></path></svg><!-- <i class="fa-solid fa-couch"></i> Font Awesome fontawesome.com --> Furnishing</h5>
        <div class="d-flex justify-content-start flex-wrap gap-2">
          <ul class="nft-item-categories">
  <li class="nft-item-category-list">
    <input type="checkbox" id="furnishing1" name="furnishing" value="1" style="display:none;">
    <label for="furnishing1" class="btn px-3 hover">All Furnishings</label>
  </li>
  <li class="nft-item-category-list">
    <input type="checkbox" id="furnishing2" name="furnishing" value="2" style="display:none;">
    <label for="furnishing2" class="btn px-3 hover">Furnished</label>
  </li>
  <li class="nft-item-category-list">
    <input type="checkbox" id="furnishing3" name="furnishing" value="3" style="display:none;">
    <label for="furnishing3" class="btn px-3 hover">Unfurnished</label>
  </li>
  <li class="nft-item-category-list">
    <input type="checkbox" id="furnishing4" name="furnishing" value="4" style="display:none;">
    <label for="furnishing4" class="btn px-3 hover">Partly Furnished</label>
  </li>
</ul>
        </div>
      </div>
      <div class="p-4 border-bottom">
        <h5 style="color:#3b3a5e ;"><svg class="svg-inline--fa fa-trowel-bricks" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trowel-bricks" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M240.8 4.779C250.3 10.61 256 20.91 256 32V104H345C348.6 90.2 361.1 80 376 80H464C490.5 80 512 101.5 512 128C512 154.5 490.5 176 464 176H376C361.1 176 348.6 165.8 345 152H256V224C256 235.1 250.3 245.4 240.8 251.2C231.4 257.1 219.6 257.6 209.7 252.6L17.69 156.6C6.848 151.2 0 140.1 0 128C0 115.9 6.848 104.8 17.69 99.38L209.7 3.378C219.6-1.581 231.4-1.051 240.8 4.779V4.779zM288 256C288 238.3 302.3 224 320 224H480C497.7 224 512 238.3 512 256V320C512 337.7 497.7 352 480 352H320C302.3 352 288 337.7 288 320V256zM128 384C145.7 384 160 398.3 160 416V480C160 497.7 145.7 512 128 512H32C14.33 512 0 497.7 0 480V416C0 398.3 14.33 384 32 384H128zM480 384C497.7 384 512 398.3 512 416V480C512 497.7 497.7 512 480 512H224C206.3 512 192 497.7 192 480V416C192 398.3 206.3 384 224 384H480z"></path></svg><!-- <i class="fa-solid fa-trowel-bricks"></i> Font Awesome fontawesome.com --> Completion Status</h5>
        <div class="d-flex justify-content-start flex-wrap gap-2">
        
           <ul class="nft-item-categories-1">
  <li class="nft-item-category-list-1">
    <input type="checkbox" id="completion_status1" name="completion_status" value="1" style="display:none;">
    <label for="completion_status1" class="btn px-3 hover">Any</label>
  </li>
  <li class="nft-item-category-list-1">
    <input type="checkbox" id="completion_status2" name="completion_status" value="2" style="display:none;">
    <label for="completion_status2" class="btn px-3 hover">Off-plan</label>
  </li>
  <li class="nft-item-category-list-1">
    <input type="checkbox" id="completion_status3" name="completion_status" value="3" style="display:none;">
    <label for="completion_status3" class="btn px-3 hover">Ready</label>
  </li>
  
</ul>
        </div>
      </div>
      <div class="p-4 border-bottom">
        <h5 style="color:#3b3a5e ;"><svg class="svg-inline--fa fa-ruler" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ruler" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M177.9 494.1C159.2 512.8 128.8 512.8 110.1 494.1L17.94 401.9C-.8054 383.2-.8054 352.8 17.94 334.1L68.69 283.3L116.7 331.3C122.9 337.6 133.1 337.6 139.3 331.3C145.6 325.1 145.6 314.9 139.3 308.7L91.31 260.7L132.7 219.3L180.7 267.3C186.9 273.6 197.1 273.6 203.3 267.3C209.6 261.1 209.6 250.9 203.3 244.7L155.3 196.7L196.7 155.3L244.7 203.3C250.9 209.6 261.1 209.6 267.3 203.3C273.6 197.1 273.6 186.9 267.3 180.7L219.3 132.7L260.7 91.31L308.7 139.3C314.9 145.6 325.1 145.6 331.3 139.3C337.6 133.1 337.6 122.9 331.3 116.7L283.3 68.69L334.1 17.94C352.8-.8055 383.2-.8055 401.9 17.94L494.1 110.1C512.8 128.8 512.8 159.2 494.1 177.9L177.9 494.1z"></path></svg><!-- <i class="fa-solid fa-ruler"></i> Font Awesome fontawesome.com --> Property Size (Sqft)</h5>
        <div class="d-flex justify-content-start flex-wrap gap-3">
          <div class="mt-3">
            Min. Area:
            <input type="text" class="form-control border-danger w-auto" id="min_size" name="min_size" placeholder="Min. Area">
          </div>
          <div class="mt-3">
            Max. Area:
            <input type="text" class="form-control border-danger w-auto" id="max_size" name="max_size" placeholder="Max. Area">
          </div>
        </div>
      </div>
      <div class="p-4 border-bottom">
        <h5 style="color:#3b3a5e ;"><svg class="svg-inline--fa fa-gem" aria-hidden="true" focusable="false" data-prefix="far" data-icon="gem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M507.9 196.4l-104-153.8C399.4 35.95 391.1 32 384 32H127.1C120 32 112.6 35.95 108.1 42.56l-103.1 153.8c-6.312 9.297-5.281 21.72 2.406 29.89l231.1 246.2C243.1 477.3 249.4 480 256 480s12.94-2.734 17.47-7.547l232-246.2C513.2 218.1 514.2 205.7 507.9 196.4zM382.5 96.59L446.1 192h-140.1L382.5 96.59zM256 178.9L177.6 80h156.7L256 178.9zM129.5 96.59L205.1 192H65.04L129.5 96.59zM256 421L85.42 240h341.2L256 421z"></path></svg><!-- <i class="fa-regular fa-gem"></i> Font Awesome fontawesome.com --> Amenities</h5>
        <div class="row mt-3">
          <div class="col-sm-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" name="amenities">
              <label class="form-check-label" for="Central">
                Central A/C
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="4" name="amenities">
              <label class="form-check-label" for="Shared-Pool">
                Shared Pool
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="7" name="amenities">
              <label class="form-check-label" for="Concierge">
                Concierge Service
              </label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="2" name="amenities">
              <label class="form-check-label" for="Maids-Room">
                Maids Room
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="5" name="amenities">
              <label class="form-check-label" for="Shared-Spa">
                Shared Spa
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="8" name="amenities">
              <label class="form-check-label" for="Covered-Parking">
                Covered Parking
              </label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="3" name="amenities">
              <label class="form-check-label" for="Balcony">
                Balcony
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="6" name="amenities">
              <label class="form-check-label" for="Shared-Gym">
                Shared Gym
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="9" name="amenities">
              <label class="form-check-label" for="View-of-Water">
                View of Water
              </label>
            </div>
          </div>
        </div>
        <div class="btn btn-light text-primary show-more-btn mt-3" onclick="showMoreFunction()">Show more <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg><!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com --></div>
        <div class="row checkbox-hidden d-none">
          <div class="col-sm-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="10" name="amenities">
              <label class="form-check-label" for="View-of-Landmark">
                View of Landmark
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="11" name="amenities">
              <label class="form-check-label" for="Private-Garden">
                Private Garden
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="12" name="amenities">
              <label class="form-check-label" for="Private-Jacuzzi">
                Private Jacuzzi
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="13" name="amenities">
              <label class="form-check-label" for="Built-in-Kitchen-Appliances">
                Built in Kitchen Appliances
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="14" name="amenities">
              <label class="form-check-label" for="Children's-Pool">
                Children's Pool
              </label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="15" name="amenities">
              <label class="form-check-label" for="Pets-Allowed">
                Pets Allowed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="16" name="amenities">
              <label class="form-check-label" for="Private-Pool">
                Private Pool
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="17" name="amenities">
              <label class="form-check-label" for="Built-in-Wardrobes">
                Built in Wardrobes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="18" name="amenities">
              <label class="form-check-label" for="Maid-Service">
                Maid Service
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="19" name="amenities">
              <label class="form-check-label" for="Barbecue-Area">
                Barbecue Area
              </label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="20" name="amenities">
              <label class="form-check-label" for="Study">
                Study
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="21" name="amenities">
              <label class="form-check-label" for="Private-Gym">
                Private Gym
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="22" name="amenities">
              <label class="form-check-label" for="Walk-in-Closet">
                Walk-in Closet
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="23" name="amenities">
              <label class="form-check-label" for="Children's-Play-Area">
                Children's Play Area
              </label>
            </div>
          </div>
        </div>
        <div class="btn btn-light text-primary show-less-btn d-none mt-3" onclick="showLessFunction()">Show Less <svg class="svg-inline--fa fa-chevron-up" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 352c-8.188 0-16.38-3.125-22.62-9.375L224 173.3l-169.4 169.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25C432.4 348.9 424.2 352 416 352z"></path></svg><!-- <i class="fa-solid fa-chevron-up"></i> Font Awesome fontawesome.com --></div>
      </div>
      <div class="p-4 border-bottom">
        <h5 style="color:#3b3a5e ;"><svg class="svg-inline--fa fa-circle-play" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M188.3 147.1C195.8 142.8 205.1 142.1 212.5 147.5L356.5 235.5C363.6 239.9 368 247.6 368 256C368 264.4 363.6 272.1 356.5 276.5L212.5 364.5C205.1 369 195.8 369.2 188.3 364.9C180.7 360.7 176 352.7 176 344V167.1C176 159.3 180.7 151.3 188.3 147.1V147.1zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path></svg><!-- <i class="fa-regular fa-circle-play"></i> Font Awesome fontawesome.com --> Virtual Viewings</h5>
        <div class="d-flex justify-content-start flex-wrap gap-2">
            <ul class="nft-item-categories-2">
  <li class="nft-item-category-list-2">
    <input type="checkbox" id="virtual_viewings1" name="virtual_viewings" value="1" style="display:none;">
    <label for="virtual_viewings1" class="btn px-3 hover">All Virtual Viewings</label>
  </li>
  <li class="nft-item-category-list-2">
    <input type="checkbox" id="virtual_viewings2" name="virtual_viewings" value="2" style="display:none;">
    <label for="virtual_viewings2" class="btn px-3 hover">360 Tours</label>
  </li>
  <li class="nft-item-category-list-2">
    <input type="checkbox" id="virtual_viewings3" name="virtual_viewings" value="3" style="display:none;">
    <label for="virtual_viewings3" class="btn px-3 hover">Vedio Tours</label>
  </li>
  <li class="nft-item-category-list-2">
    <input type="checkbox" id="virtual_viewings4" name="virtual_viewings" value="4" style="display:none;">
    <label for="virtual_viewings4" class="btn px-3 hover">Live Viewings</label>
  </li>
</ul>
        </div>
      </div>
      <div class="d-flex justify-content-end gap-3 px-4 py-2">
          <div class="btn btn-outline-primary">Clear All</div>
          <div class="btn btn-danger">Show 12,911 results</div>
      </div>
    </div>
   
    @yield('content')
  
    @include('webSite.include.footer')
    
    @if (session('success'))
    <script>
      @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,  
    "backgroundColor": "#ffffff"
  }
  		toastr.success("{{ session('success') }}");
  @endif
    
    </script>
@endif
     <!--scirpt Files-->
     <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="/js/all.min.js"></script>
    <script src="/js/main.js"></script>
    <!--scirpt Files-->
    @stack('scripts')
</body>
</html>