@extends('layouts.site.app')
@section('content')
<header>
      <div class="d-flex justify-content-between px-4 py-2">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-secondary fw-bold bg-white" id="languagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><span><svg class="svg-inline--fa fa-globe" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M352 256C352 278.2 350.8 299.6 348.7 320H163.3C161.2 299.6 159.1 278.2 159.1 256C159.1 233.8 161.2 212.4 163.3 192H348.7C350.8 212.4 352 233.8 352 256zM503.9 192C509.2 212.5 512 233.9 512 256C512 278.1 509.2 299.5 503.9 320H380.8C382.9 299.4 384 277.1 384 256C384 234 382.9 212.6 380.8 192H503.9zM493.4 160H376.7C366.7 96.14 346.9 42.62 321.4 8.442C399.8 29.09 463.4 85.94 493.4 160zM344.3 160H167.7C173.8 123.6 183.2 91.38 194.7 65.35C205.2 41.74 216.9 24.61 228.2 13.81C239.4 3.178 248.7 0 256 0C263.3 0 272.6 3.178 283.8 13.81C295.1 24.61 306.8 41.74 317.3 65.35C328.8 91.38 338.2 123.6 344.3 160H344.3zM18.61 160C48.59 85.94 112.2 29.09 190.6 8.442C165.1 42.62 145.3 96.14 135.3 160H18.61zM131.2 192C129.1 212.6 127.1 234 127.1 256C127.1 277.1 129.1 299.4 131.2 320H8.065C2.8 299.5 0 278.1 0 256C0 233.9 2.8 212.5 8.065 192H131.2zM194.7 446.6C183.2 420.6 173.8 388.4 167.7 352H344.3C338.2 388.4 328.8 420.6 317.3 446.6C306.8 470.3 295.1 487.4 283.8 498.2C272.6 508.8 263.3 512 255.1 512C248.7 512 239.4 508.8 228.2 498.2C216.9 487.4 205.2 470.3 194.7 446.6H194.7zM190.6 503.6C112.2 482.9 48.59 426.1 18.61 352H135.3C145.3 415.9 165.1 469.4 190.6 503.6V503.6zM321.4 503.6C346.9 469.4 366.7 415.9 376.7 352H493.4C463.4 426.1 399.8 482.9 321.4 503.6V503.6z"></path></svg><!-- <i class="fa-solid fa-globe"></i> Font Awesome fontawesome.com --></span> Languages</a>
          <ul class="dropdown-menu" aria-labelledby="languagesDropdown">
          <li>
            <a class="dropdown-item text-secondary fw-bold" rel="alternate" hreflang="ar"  href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"style="font-size: 20px;font-weight: 900;font-variant: all-petite-caps;" >
                Arabic</a>
            </li>
            <li>
            <a class="dropdown-item text-secondary fw-bold" rel="alternate" hreflang="en"  href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"style="font-size: 18px;font-weight: 600;font-variant: all-petite-caps;">
              English</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
           @include('webSite.include.navigation')
        <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">01</span> Location</span>
           
          </div>
          <div class="row" style="margin: 10% 1% 0 1%;">
          <div id="map"></div>        
          </div>
      </div>
    </header>
  
    <section class="mt-5" style="margin-top:15% !important;">
      <div class="container">
     
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">02</span> Photos</span>
           
          </div>
          <div class="row align-items-center ">
            <div class="col-md-6 p-4 h-100">
                <span class="w-auto p-2" style="color:#B16642 ; background-color: #F3D1C1;letter-spacing: 1.5px; "><svg class="svg-inline--fa fa-house" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"></path></svg><!-- <i class="fa-solid fa-house"></i> Font Awesome fontawesome.com --> Real Estate Agency</span>
                <h2 class="fw-bold py-2" style="color: #3b3a5e;">Find the perfect place to Live with your family</h2>
                <p style="color:#B16642 ;">Distinctively re-engineer revolutionary meta-services and premium architectures. Intrinsically incubate.</p>
                <div class="btn hover bg-white px-3 py-2" style="color: #3b3a5e;font-size: 18px;">Try 3D <span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div>
                <!-- <img src="/img/3d.jpeg" style="width:100px ;height:100px" alt=""> -->
              </div>
             
            <div class="col-md-6 h-100 p-4">
                 @if(count($postAdvertise->images) > 1) 
                 @php $count = 1;@endphp
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                       @foreach($postAdvertise->images as $image)
                       @if($count == 1)
                         <div class="carousel-item active">
                            <img src="/images/post-images/{{$image->image_path}}" style="height: 400px;" alt="" class="w-100">
                        </div>
                       @else
                        <div class="carousel-item">
                            <img src="/images/post-images/{{$image->image_path}}" style="height: 400px;" alt="" class="w-100">
                        </div>
                        @endif
                        @php $count++ @endphp
                        @endforeach
                    </div>
                </div>
                 @else
                 <img src="/img/house.jpg" style="height: 400px;" alt="" class="w-100">
                 @endif
            </div>
           
        </div>
      </div>
    </section>
   <section class="mt-5">
      <div class="container">
         @php $duration = ['1'=>'1 month','2'=>'2 month','3'=>'3 month','4'=>'4 month','5'=>'5 month','6'=>'6 month','7'=>'7 month',
                                     '8'=>'8 month','9'=>'9 month','10'=>'10 month','11'=>'11 month','12'=>'1 year'];
                                      
                 $payment_duration = ['1'=>'1 month','2'=>'3 month','3'=>'6 month','4'=>'1 year','5'=>'2 year','6'=>'3 year','7'=>'6 year','8'=>'10 year'];              
                 $property_types  = ['1'=>'Apartment','2'=>'Villa','3'=>'Townhouse','4'=>'Penthouse','5'=>'Compound','6'=>'Duplex','7'=>'Full Floor','8'=>'Half Floor',
                                     '9'=>'Whole Building','10'=>'Land','11'=>'Bulk Sale Unit','12'=>'Bungalow','13'=>'Hotel & Hotel Apartment'];   
                 $bedrooms = ['1'=>'Studio','2'=>'0','3'=>'1','4'=>'2','5'=>'3','6'=>'4','7'=>'5','8'=>'6','9'=>'7','10'=>'+7'];   
                 $bathrooms = ['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4','6'=>'5','7'=>'6','8'=>'7','9'=>'+7'];
                 $floors =  ['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4','6'=>'5','7'=>'6','8'=>'7','9'=>'+7']; 
                 $furnishings = ['1'=>'All Furnishings','2'=>'Furnished','3'=>'Unfurnished','4'=>'Partly Furnished'];
                 $completion_status = ['1'=>'Any','2'=>'Off-Plan','3'=>'Ready'];
                 $virtual_viewings = ['1'=>'All Virtual Viewings','2'=>'360 Tours','3'=>'Vedio Tours','4'=>'Live Viewings'];
                 $amenities = ['1'=>'Central A/C','2'=>'Maids Room','3'=>'Balcony','4'=>'Shared Pool','5'=>'Shared Spa','6'=>'Shared Gym','7'=>'Concierge Service','8'=>'Covered Parking','9'=>'View Of Water','10'=>'View Of Landmark','15'=>'Pets Allowed','20'=>'Study','11'=>'Private Garden','16'=>'Private Pool','21'=>'Private Gym','12'=>'Private Jacuzzi','17'=>'Built In Wardrobes','22'=>'Walk-In Closet','13'=>'Built In Kitchen Appliances','18'=>'Maid Service','23'=>'Children Play Area','19'=>'Barbecue Area','14'=>'Children Pool'];
                                      @endphp
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">03</span> Main Information</span>
            
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Advertise Duration:</label>{{$duration[$postAdvertise->duration]}}
                </div>
     
             <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Advertise Price:</label>{{$postAdvertise->duration_price}}LE
                </div>
         <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">New Launch Or Resell:</label>
                @if($postAdvertise->new_resell == "new")
                <span>New Launch</span>
                @else
                <span>Resell</span> 
                @endif
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">For Rent Or Sell:</label>
                @if($postAdvertise->rent_sell == "rent")
                <span>Rent</span> 
                @else
                 <span>Sell</span>
                
                @endif
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Property Price:</label>{{$postAdvertise->price}}LE
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Cash Or Installment:</label>
                @if($postAdvertise->cash_installment == "cash")
                <span>Cash</span> 
                @else
                <span>Installment</span> 
                @endif
                </div>
                @if($postAdvertise->cash_installment == "cash")
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Total Amount:</label>{{$postAdvertise->total_amount}}LE
                </div>
                 @else
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Advance Payment:</label>{{$postAdvertise->advance_payment}}LE
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Remaining Amount:</label>{{$postAdvertise->remaining_amount}}LE
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Installment Duration:</label>{{$postAdvertise->installment_duration}}
                </div>
                 @endif
          </div>
      </div>
    </section>
    <section class="mt-5">
      <div class="container">
         
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">04</span> Basics</span>
            
          </div>
         <div class="row mt-3">
            <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Propert Type:</label>{{$property_types[$postAdvertise->property_type]}}
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Propert Size:</label>{{$postAdvertise->property_size}}Sqm
                </div>
                  <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Location:</label>{{$postAdvertise->location}}
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Bedrooms:</label>{{$bedrooms[$postAdvertise->bedrooms_no]}} Beds
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Bathrooms:</label>{{$bathrooms[$postAdvertise->Bathrooms_no]}} Baths
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Floors:</label>{{$floors[$postAdvertise->floors_no]}} Floors
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Year Construction:</label>{{$postAdvertise->Construction_year}} 
                </div>
                 @if($postAdvertise->new_resell == "new")
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Logo:</label><img src="/images/post-images/logos/{{$postAdvertise->logo}}" width="100px" height="100px"/>
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Developer Name:</label>{{$postAdvertise->developer_name}} 
                </div>
                <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Delivery Date:</label>{{$postAdvertise->delivery_date}} 
                </div>
                 @endif
                 @if(isset($postAdvertise->furnishing))
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Furnishing:</label>{{$furnishings[$postAdvertise->furnishing]}} 
                </div>
                 @endif
                 @if(isset($postAdvertise->completion_status))
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Completion Status:</label>{{$completion_status[$postAdvertise->completion_status]}} 
                </div>
                 @endif
                 @if(isset($property_amenities))
                 <div class="col-md-4 mt-2">
                     <label style="color:#7D7D7D ;">Amenities:</label><br/>
                     @foreach($property_amenities as $property_amenity)
                     {{$amenities[$property_amenity->amenities]}}
                     @endforeach
                     </div>
                 @endif
                 @if(isset($postAdvertise->virtual_viewings))
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Virtual Viewings:</label>{{$virtual_viewings[$postAdvertise->virtual_viewings]}} 
                </div>
                 @endif
          </div>
      </div>
    </section>
     <section class="mt-5">
      <div class="container">
         
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">05</span> Contact Information</span>
            
          </div>
          <div class="row mt-3">
               <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Name:</label>{{$postAdvertise->name}}
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Email:</label>{{$postAdvertise->email}}
                </div>
                 <div class="col-md-4 mt-2">
                <label style="color:#7D7D7D ;">Phone:</label>{{$postAdvertise->phone}}
                </div>
                <div class="col-md-4 mt-2">
                <input type="hidden" id="latitude" name="latitude" class="form-control" value="{{$postAdvertise->latitude}}">
              <input type="hidden" id="longitude" name="longitude" class="form-control" value="{{$postAdvertise->longitude}}">
              </div>
 
     
     
         
          </div>
      </div>
    </section>
    <section class="mt-5">
      <div class="container">
         
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">06</span> Title & Description</span>
            
          </div>
          <div class="row">
              <label>Title</label>
              <p style="color:#7D7D7D ;">{{$postAdvertise->title}}</p>
               <label>Description</label>
              <p style="color:#7D7D7D ;">{{$postAdvertise->description}}</p>
     
     
         
          </div>
      </div>
    </section>
  
@endsection
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='//cdn.jsdelivr.net/npm/sheet-slider@3/dist/css/main.min.css'>
<link rel="stylesheet" href="css/news-details.css">

   


@endpush
@push('scripts')
<script>
        var mapInitialized = false;
        var map;
        var marker;

        //document.getElementById('unit_location').addEventListener('click', function(event) {
            // event.preventDefault();
            document.getElementById('map').style.display = 'block';
            var lat =  document.getElementById('latitude').value;
            var long = document.getElementById('longitude').value;
            if (!mapInitialized) {
                var tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> Contributors'
            });
            
            var latlng = L.latLng(lat, long);
            
             map = new L.Map('map', {
            'center': latlng,
            'zoom': 12,
            'layers': [tileLayer]
            });
            
             marker = L.marker(latlng,{
                draggable: true,
                autoPan: true
            }).addTo(map);
            
            marker.on('dragend', function (e) {
            updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
            });
            
            map.on('click', function (e) {
            marker.setLatLng(e.latlng);
            updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
            });


            const searchControl  = new GeoSearch.GeoSearchControl({
              style: 'bar',
              provider: new GeoSearch.OpenStreetMapProvider ({
              showMarker: true,
              marker: marker, // use custom marker, not working?
            }),
            
            });
            map.addControl(searchControl);
            mapInitialized = true;
            }
    
        function updateLatLng(lat,lng) {
        //document.getElementById('latitude').value = marker.getLatLng().lat;
        //document.getElementById('longitude').value = marker.getLatLng().lng;
        }
    </script>
<script>
// Github => github.com/zkreations/SheetSlider
// NPM => npmjs.com/package/sheet-slider

// Auto (optional)
function initializeSlider(slider) {
  const time = slider.dataset.sheetTime || 3000;
  const inputs = slider.querySelectorAll('input');
  let index = 0;
  let intervalId;

  function updateInputState() {
    inputs[index].checked = false;
    index = (index + 1) % inputs.length;
    inputs[index].checked = true;
  }

  function startInterval() {
    index = Array.from(inputs).findIndex(input => input.checked) || 0;
    intervalId = setInterval(updateInputState, time);
  }

  const stopInterval = () => clearInterval(intervalId);

  startInterval();

  slider.addEventListener('mouseenter', stopInterval);
  slider.addEventListener('mouseleave', startInterval);
}

document.querySelectorAll('[data-sheet-time]').
forEach(initializeSlider);
//# sourceURL=pen.js
    </script>
@endpush