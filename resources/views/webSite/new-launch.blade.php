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
        <div class="btn fw-bold hover text-white" style="background-color: #3b3a5e">
          Login/Signup
        </div>
      </div>
      <div class="container">
      @include('webSite.include.navigation')
        <div class="row align-items-center ">
            <div class="col-md-6 p-4 h-100">
                <span class="w-auto p-2" style="color:#B16642 ; background-color: #F3D1C1;letter-spacing: 1.5px; "><svg class="svg-inline--fa fa-house" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"></path></svg><!-- <i class="fa-solid fa-house"></i> Font Awesome fontawesome.com --> Real Estate Agency</span>
                <h2 class="fw-bold py-2" style="color: #3b3a5e;">Find the perfect place to Live with your family</h2>
                <p style="color:#B16642 ;">Distinctively re-engineer revolutionary meta-services and premium architectures. Intrinsically incubate.</p>
                <div class="btn hover bg-white px-3 py-2" style="color: #3b3a5e;font-size: 18px;">Try 3D <span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div>
                <!-- <img src="/img/3d.jpeg" style="width:100px ;height:100px" alt=""> -->
              </div>
            <div class="col-md-6 h-100 p-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="/img/house.jpg" style="height: 400px;" alt="" class="w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/house-2.png" style="height: 400px;" alt="" class="w-100">
                        </div>
                        <div class="carousel-item active">
                            <img src="/img/house-3.webp" style="height: 400px;" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </header>

    <section class="pt-5 " style="background-color: #F5F1EF;">
        
        <div class="pt-5 text-center">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">02</span> Featured properties</span>
            <h3 class="fw-bold py-3" style="color:#3b3a5e">New Launches Properties in your <br> favorite area</h3>
        </div>
        <div class="container-fluid">
            <div class="mt-3 row ">
                @php $count = 0;
                $property_types  = [
            '1'=>'Apartment','2'=>'Villa','3'=>'Townhouse','4'=>'Penthouse','5'=>'Compound','6'=>'Duplex','7'=>'Full Floor','8'=>'Half Floor',
                                     '9'=>'Whole Building','10'=>'Land','11'=>'Bulk Sale Unit','12'=>'Bungalow','13'=>'Hotel & Hotel Apartment'];   
        $bedrooms = ['1'=>'Studio','2'=>'0','3'=>'1','4'=>'2','5'=>'3','6'=>'4','7'=>'5','8'=>'6','9'=>'7','10'=>'+7'];   
        $bathrooms = ['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4','6'=>'5','7'=>'6','8'=>'7','9'=>'+7'];
                @endphp
                @foreach($postAdvertises as $postAdvertise)
                <div class="col-lg-4 col-md-6">
                    <div class=" bg-white mb-3 p-4">
                        <!--<img src="img/house.jpg" style="height: 200px;" class="img-fluid w-100" alt="">-->
                        
                              @if(count($postAdvertise->images) > 1)
                                <div class="slider-container">
                              <div class="sliderBtn prevBtn"><i class="fas fa-chevron-left"></i></div>
                              <div class="sliderBtn nextBtn"><i class="fas fa-chevron-right"></i></div>
                              <div class="slider">
                              @foreach($postAdvertise->images as $image)
                             <div class="slide">
                                <img src="/images/post-images/{{$image->image_path}}" style="height: 200px;" class="img-fluid w-100"  alt="">
                             </div>
                            @endforeach
                             </div>
                            </div>
                            @else
                            @php
                            $postImage = \App\Models\PostAdvertiseImages::where('post_advertise_id',$postAdvertise->id)->first();
                            @endphp
                            @if($postImage)
                            <img src="/images/post-images/{{$postImage->image_path}}" style="height: 200px;" class="img-fluid w-100" alt="">
                            @endif
                            @endif
                         
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h3 class="fw-bold" style="color:#FFBB50 ;">$
                            @if(is_int($postAdvertise->price) || floatval($postAdvertise->price) == intval($postAdvertise->price))
                            {{intval($postAdvertise->price)}}
                            @else
                            {{$postAdvertise->price}}
                            @endif
                            /Mo</h3>
                            <div class="btn hover p-2 px-3 fw-bold" style="background-color:#FFBB50 ;color: #3b3a5e;">Contact</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h5 class="fw-bold mt-3" style="color:#3b3a5e">{{$property_types[$postAdvertise->property_type]}}</h5>
                            <p style="color:#8E8E8E ;"><svg class="svg-inline--fa fa-location-dot" style="color: #FFBB50;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path></svg><!-- <i class="fa-solid fa-location-dot" style="color: #FFBB50;"></i> Font Awesome fontawesome.com --> {{$postAdvertise->location}}</p>
                          </div>
                          <div class="btn btn-danger fw-bold p-2" style="font-size: 18px;">3D View</div>
                        </div>
                        <div class="row">
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-bed border-end pe-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M176 288C220.1 288 256 252.1 256 208S220.1 128 176 128S96 163.9 96 208S131.9 288 176 288zM544 128H304C295.2 128 288 135.2 288 144V320H64V48C64 39.16 56.84 32 48 32h-32C7.163 32 0 39.16 0 48v416C0 472.8 7.163 480 16 480h32C56.84 480 64 472.8 64 464V416h512v48c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16V224C640 170.1 597 128 544 128z"></path></svg><!-- <i class="fa-solid fa-bed border-end pe-1"></i> Font Awesome fontawesome.com --> {{$bedrooms[$postAdvertise->bedrooms_no]}} Beds</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-bath" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bath" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 384c0 28.32 12.49 53.52 32 71.09V496C64 504.8 71.16 512 80 512h32C120.8 512 128 504.8 128 496v-15.1h256V496c0 8.836 7.164 16 16 16h32c8.836 0 16-7.164 16-16v-40.9c19.51-17.57 32-42.77 32-71.09V352H32V384zM496 256H96V77.25C95.97 66.45 111 60.23 118.6 67.88L132.4 81.66C123.6 108.6 129.4 134.5 144.2 153.2C137.9 159.5 137.8 169.8 144 176l11.31 11.31c6.248 6.248 16.38 6.248 22.63 0l105.4-105.4c6.248-6.248 6.248-16.38 0-22.63l-11.31-11.31c-6.248-6.248-16.38-6.248-22.63 0C230.7 33.26 204.7 27.55 177.7 36.41L163.9 22.64C149.5 8.25 129.6 0 109.3 0C66.66 0 32 34.66 32 77.25v178.8L16 256C7.164 256 0 263.2 0 272v32C0 312.8 7.164 320 16 320h480c8.836 0 16-7.164 16-16v-32C512 263.2 504.8 256 496 256z"></path></svg><!-- <i class="fa-solid fa-bath"></i> Font Awesome fontawesome.com --> {{$bathrooms[$postAdvertise->Bathrooms_no]}} Baths</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-car" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z"></path></svg><!-- <i class="fa-solid fa-car"></i> Font Awesome fontawesome.com --> 1 Parking</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-ruler" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ruler" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M177.9 494.1C159.2 512.8 128.8 512.8 110.1 494.1L17.94 401.9C-.8054 383.2-.8054 352.8 17.94 334.1L68.69 283.3L116.7 331.3C122.9 337.6 133.1 337.6 139.3 331.3C145.6 325.1 145.6 314.9 139.3 308.7L91.31 260.7L132.7 219.3L180.7 267.3C186.9 273.6 197.1 273.6 203.3 267.3C209.6 261.1 209.6 250.9 203.3 244.7L155.3 196.7L196.7 155.3L244.7 203.3C250.9 209.6 261.1 209.6 267.3 203.3C273.6 197.1 273.6 186.9 267.3 180.7L219.3 132.7L260.7 91.31L308.7 139.3C314.9 145.6 325.1 145.6 331.3 139.3C337.6 133.1 337.6 122.9 331.3 116.7L283.3 68.69L334.1 17.94C352.8-.8055 383.2-.8055 401.9 17.94L494.1 110.1C512.8 128.8 512.8 159.2 494.1 177.9L177.9 494.1z"></path></svg><!-- <i class="fa-solid fa-ruler"></i> Font Awesome fontawesome.com -->
                            @if(is_int($postAdvertise->property_size) || floatval($postAdvertise->property_size) == intval($postAdvertise->property_size))
                            {{intval($postAdvertise->property_size)}}
                            @else
                            {{$postAdvertise->property_size}} 
                            @endif
                            Sqm</div></div>
                        </div>
                    </div>
                </div>
                @endforeach
   
           
    
    
            </div>
            <div class="text-center mt-3 mb-3"><div class="btn bg-white hover px-3 mb-3 py-3" style="color: #3b3a5e;">See More <span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div></div>
        </div>
    </section>


    <section class="mt-5">
      <div class="container p-5" style="background-color:#F3E8E2;">
        <h4 class="fw-bold text-center" style="color:#3b3a5e;">More than 50+ Brands Trusted World Wide</h4>
        <div class=" row justify-content-center mt-5">
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;">Proland</h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo1.svg" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo2.png" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo3.png" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6 mx-lg-2" style="color: #CAB7AD;"><img src="/img/logo4.png" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo5.svg" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo6.svg" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo7.png" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
          <h3 class="fw-bold col-lg-2 col-md-4 mb-5 col-6" style="color: #CAB7AD;"><img src="/img/logo8.png" class="img-fluid mb-1" style="height: 35px;" alt=""></h3>
        </div>
        <div class="text-center">
          <div class="btn hover bg-white px-3 py-3" style="color: #3b3a5e;">Explore now <span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div>
        </div>
      </div>
    </section>
    <section class="blog mt-5 pt-5 pb-5">
        <div class="container pb-5">
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">07</span> Blog</span>
            <h3 class="fw-bold py-3" style="color:#3b3a5e">Discover Latest Trends In Interior /Furniture Design </h3>
          </div>
          <div class="mt-4 text-center">
            <img src="/img/article1.png" class="img-fluid w-50" alt="">
            <div class="mt-4">
              <p style="color:#B16642 ;">November 05, 2021 &nbsp;  &nbsp;    |   &nbsp; &nbsp;   Architecture</p>
            </div>
            <h4 class="fw-bold text-center m-auto" style="color:#3b3a5e;">Here’s how to decorate your new home <br> from scratch</h4>
          </div>
          <div class="mt-5 text-center">
            <img src="/img/article2.png" class="img-fluid w-50" alt="">
            <div class="mt-4">
              <p style="color:#B16642 ;">December 14, 2021 &nbsp;  &nbsp;    |   &nbsp; &nbsp;   Marcket Manager</p>
            </div>
            <h4 class="fw-bold text-center m-auto" style="color:#3b3a5e;">Home buying basics: How many Kitchans <br> and bedrooms?</h4>
          </div>
          <div class="text-center mt-5">
            <div class="btn hover bg-white px-3 py-3" style="color: #3b3a5e;">See All Articles <span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div>
          </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
   var sldrCont    = $('.slider-container'),
      sldr        = $('.slider'),
      sldrSlid    = $('.slider .slide');
      sldLstChild = $('.slider .slide:last-child'),
      sldFstChild = $('.slider .slide:first-child'),
      prvBtn      = $('.prevBtn'),
      nxtBtn      = $('.nextBtn');

   var slideLength = $(sldrSlid).length,
      slideWidth  = $(sldrSlid).width(),
      slideHeight = $(sldrSlid).height(),
      sliderWidth = slideWidth * slideLength;
   
   // Slider main Container width and height as per slide w/h
   $(sldrCont).css({
      width: slideWidth,
      height: slideHeight
   });

   // Slider width as per all slide width
   $(sldr).css({
    //   'width': sliderWidth,
    //   'margin-left': - slideWidth
   });

   // Slide last child 
   $(sldLstChild).prependTo(sldr);

   // Slide left moving arrow
   function moveLeft() {
      $(sldr).animate({
         left: + slideWidth
      }, 500, function() {
         $('.slider .slide:last-child').prependTo(sldr);
         $(sldr).css('left', '');
      });
   };

   // Slide right moving arrow
   function moveRight() {
      $(sldr).animate({
         left: - slideWidth
      }, 500, function() {
         $('.slider .slide:first-child').appendTo(sldr);
         $(sldr).css('left', '');
      });
   };

   $(prvBtn).on('click', function(){
      moveLeft();
   });
   $(nxtBtn).on('click', function(){
      moveRight();
   });

   // Auto sliding
   setInterval(function () {
        moveRight();
    }, 5000); // slideTiming

});	
</script>
@endpush