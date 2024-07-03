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
          @if(auth()->guard('web')->check())
              <a href="{{ route('logout') }}" style="color:white"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          @else
              <a href="{{ route('login') }}" style="color:white">Login/Signup</a>
          @endif
      </div>
            </div>
      <div class="container">
      @include('webSite.include.navigation')
        <div class="row align-items-center ">
            <div class="col-md-6 p-4 h-100">
                <span class="w-auto p-2" style="color:#B16642 ; background-color: #F3D1C1;letter-spacing: 1.5px; "><svg class="svg-inline--fa fa-house" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"></path></svg><!-- <i class="fa-solid fa-house"></i> Font Awesome fontawesome.com --> {{ trans('home.title one') }}</span>
                <h2 class="fw-bold py-2" style="color: #3b3a5e;">{{ trans('home.title two') }}</h2>
                <p style="color:#B16642 ;">{{ trans('home.paragraph one') }}</p>
                <div class="btn hover bg-white px-3 py-2" style="color: #3b3a5e;font-size: 18px;">{{ trans('home.btn one') }} <span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div>
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
<section class="bg-white  pb-5 pt-5">
        <div class="container">
            <div class="new-lanches-container">
                <div class="content-wrapper">
                    <div class="content p-5 mb-2" style="background-color: rgb(242, 242, 242); display: none;">
                        <span class="new-lanches-span p-2"><span style="color:#FFBB50;">01</span> {{ trans('home.title three') }}</span>
                        <h3 class="fw-bold py-3" style="color:#3b3a5e">{{ trans('home.sub title no one') }}</h3>
                        <p style="color:#B16642;">{{ trans('home.paragraph one') }}</p>
                        <div class="row">
                            <div class="col-md-4 d-flex">
                                <div class="bullet-parent me-2">
                                    <div class="bullet-child"></div>
                                </div>
                                <p style="color:#757575;">{{ trans('home.sub title one') }}</p>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="bullet-parent me-2">
                                    <div class="bullet-child"></div>
                                </div>
                                <p style="color:#757575;">{{ trans('home.sub title two') }}</p>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="bullet-parent me-2">
                                    <div class="bullet-child"></div>
                                </div>
                                <p style="color:#757575;">{{ trans('home.sub title three') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="content p-5 mb-2" style="background-color: rgb(242, 242, 242); display: block;">
                        <span class="new-lanches-span p-2"><span style="color:#FFBB50;">02</span> {{ trans('home.title four') }}</span>
                        <h3 class="fw-bold py-3" style="color:#3b3a5e">{{ trans('home.sub title no one') }}</h3>
                        <p style="color:#B16642;">{{ trans('home.paragraph two') }}</p>
                        <div class="row">
                            <div class="col-md-4 d-flex">
                                <div class="bullet-parent me-2">
                                    <div class="bullet-child"></div>
                                </div>
                                <p style="color:#757575;">{{ trans('home.sub title four') }}</p>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="bullet-parent me-2">
                                    <div class="bullet-child"></div>
                                </div>
                                <p style="color:#757575;">{{ trans('home.sub title five') }}</p>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="bullet-parent me-2">
                                    <div class="bullet-child"></div>
                                </div>
                                <p style="color:#757575;">{{ trans('home.sub title six') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <button id="prev" class="control-arrow"><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path></svg><!-- <i class="fa-solid fa-chevron-left"></i> Font Awesome fontawesome.com --></button>
                    <button id="next" class="control-arrow"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg><!-- <i class="fa-solid fa-chevron-right"></i> Font Awesome fontawesome.com --></button>
                </div>
                <div class="image-wrapper mx-auto row mt-2" style="display: none;">
                    <div class="col-md-4 mb-2">
                        <img src="/img/house.jpg" style="height:250px;" class="img-fluid w-100" alt="">
                    </div>
                    <div class="col-md-4 mb-2">
                        <img src="/img/house-2.png" style="height:250px;" class="img-fluid w-100" alt="">
                    </div>
                    <div class="col-md-4 mb-2">
                        <img src="/img/house-3.webp" style="height:250px;" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="image-wrapper mx-auto row mt-2" style="display: flex;">
                    <div class="col-md-4 mb-2">
                        <img src="/img/house-3.webp" style="height:250px;" class="img-fluid w-100" alt="">
                    </div>
                    <div class="col-md-4 mb-2">
                        <img src="/img/house.jpg" style="height:250px;" class="img-fluid w-100" alt="">
                    </div>
                    <div class="col-md-4 mb-2">
                        <img src="/img/house-2.png" style="height:250px;" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 " style="background-color: #F5F1EF;">
        <div class="pt-5">
            <div class="row container-fluid">
                
                <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-3">
                  <div class="form-group   position-relative">
                    <input type="text" class="form-control border-danger ps-5" placeholder="{{ trans('home.city or community or building') }}">
                    <svg class="svg-inline--fa fa-magnifying-glass text-secondary position-absolute" style="top: 50%; transform: translateY(-50%); left: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <i class="fa-solid fa-search text-secondary position-absolute" style="top: 50%; transform: translateY(-50%); left: 10px"></i> Font Awesome fontawesome.com -->
                  </div>
                </div>
                <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-2">
                  <div class="form-group  ">
                    <select class="form-select border-danger" style="color: #3b3a5e;" aria-label="Default select example">
                        <option value="0" selected="">{{ trans('home.Rent') }}</option>
                        <option value="1">Buy</option>
                      </select>
                  </div>
                </div>
                <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-3">
                  <div class="form-group  ">
                    <select class="form-select border-danger" style="color: #3b3a5e;" aria-label="Default select example" id="property_type" name="property_type">
                        <option value="0" selected="">{{ trans('home.Property Type') }}</option>
                        <option value="1">Apartment</option>
                        <option value="2">Villa</option>
                        <option value="3">Townhouse</option>
                        <option value="4">Penthouse</option>
                        <option value="5">Compound</option>
                        <option value="6">Duplex</option>
                        <option value="7">Full Floor</option>
                        <option value="8">Half Floor</option>
                        <option value="9">Whole Building</option>
                        <option value="10">Land</option>
                        <option value="11">Bulk Sale Unit</option>
                        <option value="12">Bungalow</option>
                        <option value="13">Hotel &amp; Hotel Apartment</option>
                      </select>
                  </div>
                </div>
                <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-2">
                  <div class="form-group  ">
                    <select class="form-select border-danger" style="color: #3b3a5e;" aria-label="Default select example" id="bedrooms_no" name="bedrooms_no">
                        <option value="0" selected="" disabled="">{{ trans('home.beds') }}:</option>
                        <option value="1">Studio</option>
                        <option value="2">0</option>
                        <option value="3">1</option>
                        <option value="4">2</option>
                        <option value="5">3</option>
                        <option value="6">4</option>
                        <option value="7">5</option>
                        <option value="8">6</option>
                        <option value="9">7</option>
                        <option value="10">+7</option>
                      </select>
                  </div>
                </div>
                <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-2">
                  <div class="form-group  ">
                    <select class="form-select border-danger" style="color: #3b3a5e;" aria-label="Default select example" id="Bathrooms_no" name="Bathrooms_no">
                        <option value="0" selected="" disabled="">{{ trans('home.baths') }}:</option>
                        <option value="1">0</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        <option value="4">3</option>
                        <option value="5">4</option>
                        <option value="6">5</option>
                        <option value="7">6</option>
                        <option value="8">7</option>
                        <option value="9">+7</option>
                      </select>
                  </div>
                </div>
                <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-2">
                  <div class=" form-group  dropdown">
                    <a class="nav-link form-control border-danger dropdown-toggle" id="languagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#" style="padding-top:6px ;padding-bottom:6px;color: #3b3a5e;"> {{ trans('home.price') }}</a>
                    <ul class="dropdown-menu" aria-labelledby="languagesDropdown">
                      <li class="m-3">
                        Min:
                        <input type="text" class="form-control border-danger w-auto" placeholder="Min. Price (LE)">
                      </li>
                      <li class="m-3">
                        Max:
                        <input type="text" class="form-control border-danger w-auto" placeholder="Max. Price (LE)">
                      </li>
                    </ul>
                  </div>
                </div>
                    <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-2"><div class="btn border-danger bg-white " onclick="moreFilters()" style="color: #3b3a5e;">{{ trans('home.more filters') }}</div></div>
                    <div class="mb-2 col-md-3 col-sm-4 col-6 col-lg-1"><button id="find" class="btn hover border-danger fw-bold" style="color: #3b3a5e;background-color: #F3D1C0;">{{ trans('home.find') }}</button></div>
                    
            </div>
        </div>
        <div class="pt-5 text-center">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">02</span> {{ trans('home.featured properties') }}</span>
            <h3 class="fw-bold py-3" style="color:#3b3a5e">{{ trans('home.title five') }}</h3>
        </div>
        <div class="container-fluid">
                <div id="posts">
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
                            <div class="btn hover p-2 px-3 fw-bold" style="background-color:#FFBB50 ;color: #3b3a5e;"><a href="{{route('website.postadvertise.details',$postAdvertise->id)}}" style="text-decoration:none;color: #3b3a5e;">{{ trans('home.contact') }}</a></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h5 class="fw-bold mt-3" style="color:#3b3a5e">{{$property_types[$postAdvertise->property_type]}}</h5>
                           <a href="{{route('website.postadvertise.details',$postAdvertise->id)}}" style="text-decoration:none;"> <p style="color:#8E8E8E ;"><svg class="svg-inline--fa fa-location-dot" style="color: #FFBB50;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path></svg><!-- <i class="fa-solid fa-location-dot" style="color: #FFBB50;"></i> Font Awesome fontawesome.com --> {{$postAdvertise->location}}</p></a>
                          </div>
                          <div class="btn btn-danger fw-bold p-2" style="font-size: 18px;">{{ trans('home.3D view') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-bed border-end pe-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M176 288C220.1 288 256 252.1 256 208S220.1 128 176 128S96 163.9 96 208S131.9 288 176 288zM544 128H304C295.2 128 288 135.2 288 144V320H64V48C64 39.16 56.84 32 48 32h-32C7.163 32 0 39.16 0 48v416C0 472.8 7.163 480 16 480h32C56.84 480 64 472.8 64 464V416h512v48c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16V224C640 170.1 597 128 544 128z"></path></svg><!-- <i class="fa-solid fa-bed border-end pe-1"></i> Font Awesome fontawesome.com --> {{$bedrooms[$postAdvertise->bedrooms_no]}} {{ trans('home.beds') }}</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-bath" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bath" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 384c0 28.32 12.49 53.52 32 71.09V496C64 504.8 71.16 512 80 512h32C120.8 512 128 504.8 128 496v-15.1h256V496c0 8.836 7.164 16 16 16h32c8.836 0 16-7.164 16-16v-40.9c19.51-17.57 32-42.77 32-71.09V352H32V384zM496 256H96V77.25C95.97 66.45 111 60.23 118.6 67.88L132.4 81.66C123.6 108.6 129.4 134.5 144.2 153.2C137.9 159.5 137.8 169.8 144 176l11.31 11.31c6.248 6.248 16.38 6.248 22.63 0l105.4-105.4c6.248-6.248 6.248-16.38 0-22.63l-11.31-11.31c-6.248-6.248-16.38-6.248-22.63 0C230.7 33.26 204.7 27.55 177.7 36.41L163.9 22.64C149.5 8.25 129.6 0 109.3 0C66.66 0 32 34.66 32 77.25v178.8L16 256C7.164 256 0 263.2 0 272v32C0 312.8 7.164 320 16 320h480c8.836 0 16-7.164 16-16v-32C512 263.2 504.8 256 496 256z"></path></svg><!-- <i class="fa-solid fa-bath"></i> Font Awesome fontawesome.com --> {{$bathrooms[$postAdvertise->Bathrooms_no]}} {{ trans('home.baths') }}</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-car" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z"></path></svg><!-- <i class="fa-solid fa-car"></i> Font Awesome fontawesome.com --> 1 Parking</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-ruler" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ruler" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M177.9 494.1C159.2 512.8 128.8 512.8 110.1 494.1L17.94 401.9C-.8054 383.2-.8054 352.8 17.94 334.1L68.69 283.3L116.7 331.3C122.9 337.6 133.1 337.6 139.3 331.3C145.6 325.1 145.6 314.9 139.3 308.7L91.31 260.7L132.7 219.3L180.7 267.3C186.9 273.6 197.1 273.6 203.3 267.3C209.6 261.1 209.6 250.9 203.3 244.7L155.3 196.7L196.7 155.3L244.7 203.3C250.9 209.6 261.1 209.6 267.3 203.3C273.6 197.1 273.6 186.9 267.3 180.7L219.3 132.7L260.7 91.31L308.7 139.3C314.9 145.6 325.1 145.6 331.3 139.3C337.6 133.1 337.6 122.9 331.3 116.7L283.3 68.69L334.1 17.94C352.8-.8055 383.2-.8055 401.9 17.94L494.1 110.1C512.8 128.8 512.8 159.2 494.1 177.9L177.9 494.1z"></path></svg><!-- <i class="fa-solid fa-ruler"></i> Font Awesome fontawesome.com -->
                            @if(is_int($postAdvertise->property_size) || floatval($postAdvertise->property_size) == intval($postAdvertise->property_size))
                            {{intval($postAdvertise->property_size)}}
                            @else
                            {{$postAdvertise->property_size}} 
                            @endif
                            {{ trans('home.sqm') }}</div></div>
                        </div>
                    </div>
                </div>
                @endforeach
   
           </div>
    
    
            </div>
            <div class="text-center mt-3 mb-3"><div class="btn bg-white hover px-3 mb-3 py-3" style="color: #3b3a5e;">{{ trans('home.see more') }}<span><svg class="svg-inline--fa fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right text-light" style="background-color: #FFBB50;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div></div>
        </div>
    </section>
    <section>
      <div class="container mb-5 pt-5">
        <div class="pt-5 mb-4 text-center">
          <span class="new-lanches-span p-2"><span style="color:#FFBB50;">03</span>{{ trans('home.why choose') }}</span>
          <h3 class="fw-bold py-3" style="color:#3b3a5e">{{ trans('home.title six') }} <br>{{ trans('home.don’t miss us') }}</h3>
        </div>
        <div class="row mb-4">
          <div class="mb-2 col-lg-4">
            <div class="p-4 m-1 h-100" style="background-color: #F3D1C0;border-radius: 5px;">
              <svg class="svg-inline--fa fa-hand-holding-dollar mb-3" style="font-size: 150px;color: #B16642;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-holding-dollar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1C7.251 383.1 0 391.3 0 400v95.98C0 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3zM279.3 175C271.7 173.9 261.7 170.3 252.9 167.1L248 165.4C235.5 160.1 221.8 167.5 217.4 179.1s2.121 26.2 14.59 30.64l4.655 1.656c8.486 3.061 17.88 6.095 27.39 8.312V232c0 13.25 10.73 24 23.98 24s24-10.75 24-24V221.6c25.27-5.723 42.88-21.85 46.1-45.72c8.688-50.05-38.89-63.66-64.42-70.95L288.4 103.1C262.1 95.64 263.6 92.42 264.3 88.31c1.156-6.766 15.3-10.06 32.21-7.391c4.938 .7813 11.37 2.547 19.65 5.422c12.53 4.281 26.21-2.312 30.52-14.84s-2.309-26.19-14.84-30.53c-7.602-2.627-13.92-4.358-19.82-5.721V24c0-13.25-10.75-24-24-24s-23.98 10.75-23.98 24v10.52C238.8 40.23 221.1 56.25 216.1 80.13C208.4 129.6 256.7 143.8 274.9 149.2l6.498 1.875c31.66 9.062 31.15 11.89 30.34 16.64C310.6 174.5 296.5 177.8 279.3 175z"></path></svg><!-- <i class="fa-solid fa-hand-holding-dollar mb-3" style="font-size:150px ;color: #B16642;"></i> Font Awesome fontawesome.com -->
              <h5 class="fw-bold" style="color:#3b3a5e">{{ trans('home.low cost advertise system') }}</h5>
              <p style="color:#B16642;">{{ trans('home.paragraph three') }}</p>
            </div>
          </div>
          <div class="mb-2 col-lg-8">
            <div class="p-4 h-100 align-items-center m-1 row" style="background-color: #F3D1C0;border-radius: 5px;">
              <div class="col-lg-6">
                <img src="/img/Image.png" class="img-fluid w-100 mb-4" alt="">
              </div>
              <div class="col-lg-6 p-4" style="background-image:url(/img/Vector.png) ;">
                <h5 class="fw-bold" style="color:#3b3a5e">{{ trans('home.new lances middle east') }}</h5>
                <p class="mb-3" style="color:#B16642;">{{ trans('home.paragraph four') }}</p>
                <p style="color:#B16642;">{{ trans('home.paragraph five') }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="mb-2 col-lg-4">
            <div class="p-4 m-1 h-100" style="background-color: #F3D1C0;border-radius: 5px;background-image:url(/img/Vector.png) ;">
              <img src="/img/Mask group.png" class="img-fluid " style="width: 200px;height:150px" alt="">
              <h5 class="fw-bold" style="color:#3b3a5e">{{ trans('home.friendly interface user') }}</h5>
              <p style="color:#B16642;">{{ trans('home.paragraph six') }}</p>
            </div>
          </div>
          <div class="mb-2 col-lg-4">
            <div class="p-4 m-1 h-100" style="background-color: #F3D1C0;border-radius: 5px;">
              <img src="/img/Group 9.png" class="img-fluid " style="width: 100%;height:150px" alt="">
              <h5 class="fw-bold" style="color:#3b3a5e">{{ trans('home.prime real estate') }}</h5>
              <p style="color:#B16642;">{{ trans('home.paragraph seven') }}</p>
            </div>
          </div>
          <div class="mb-2 col-lg-4">
            <div class="p-4 m-1 h-100" style="background-color: #F3D1C0;border-radius: 5px;">
              <img src="/img/Group 10.png" class="img-fluid " style="width: 100%;height:150px" alt="">
              <h5 class="fw-bold" style="color:#3b3a5e">{{ trans('home.advanced free services') }}</h5>
              <p style="color:#B16642;">{{ trans('home.paragraph eight') }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
        <div class="row container-fluid">
          <div class="col-md-8 p-lg-5">
            <div class=" p-5 text-start">
              <span class="new-lanches-span p-2"><span style="color:#FFBB50;">04</span> About us</span>
              <h3 class="fw-bold py-3" style="color:#3b3a5e">Don’t Miss Us <br> you find the right Propertys</h3>
              <p class="mb-3" style="color:#B16642;">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto</p>
              <p class="mb-4" style="color:#B16642;">Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="text-start mt-3 mb-3"><div class="btn px-3 mb-3 py-3 hover" style="color: #3b3a5e;background-color: #FFBB50;">Contact <span><svg class="svg-inline--fa fa-arrow-right" style="color: #FFBB50;background-color: #3b3a5e;border-radius: 50%;width: 10px;height: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right" style="color: #FFBB50;background-color: #3b3a5e;border-radius: 50%;width: 10px;height:10px"></i> Font Awesome fontawesome.com --></span></div></div>
          </div>
          </div>
        </div>
    </section>
    <section class="pt-5">
      <div class="container">
        <div class="pt-5 text-center">
          <span class="new-lanches-span p-2"><span style="color:#FFBB50;">05</span> Services</span>
          <h3 class="fw-bold py-3" style="color:#3b3a5e">See How Can Help</h3>
        </div>
        <div class="row pt-4">
          <div class="col-lg-4 text-center col-sm-6">
              <img src="/img/home.png" class="img-fluid" alt="">
              <div style="transform:translateY(-95px) ;">
                <h4 class="fw-bold" style="color:#3b3a5e ;">Buy Property</h4>
                <p style="color:#8D8D8D">High level overviews. approaches lverall value proposition. Organically grow the holistic world view of disruptive.</p>
              </div>
          </div>
          <div class="col-lg-4 text-center col-sm-6">
              <img src="/img/Icon (1).png" class="img-fluid" alt="">
              <div style="transform:translateY(-95px) ;">
                <h4 class="fw-bold" style="color:#3b3a5e ;">Sell Property</h4>
                <p style="color:#8D8D8D">Frameworks to provide a robust synopsis for high level overviews. approaches lverall, Organically grow the holistic.</p>
              </div>
          </div>
          <div class="col-lg-4 text-center col-sm-6">
              <img src="/img/Icon (2).png" class="img-fluid" alt="">
              <div style="transform:translateY(-95px) ;">
                <h4 class="fw-bold" style="color:#3b3a5e ;">Rent Property</h4>
                <p style="color:#8D8D8D">Leverage agile frameworks to provide a robust synopsis for high level overviews. approaches lverall value proposition.</p>
              </div>
          </div>
          <div class="col-lg-4 text-center col-sm-6">
              <img src="/img/Icon (3).png" class="img-fluid" alt="">
              <div style="transform:translateY(-95px) ;">
                <h4 class="fw-bold" style="color:#3b3a5e ;">Rent Your Property</h4>
                <p style="color:#8D8D8D">Leverage agile frameworks to provide a robust synopsis for high level overviews. lverall value proposition Organically grow holistic .</p>
              </div>
          </div>
          <div class="col-lg-4 text-center col-sm-6">
              <img src="/img/Icon (3).png" class="img-fluid" alt="">
              <div style="transform:translateY(-95px) ;">
                <h4 class="fw-bold" style="color:#3b3a5e ;">Become A Member</h4>
                <p style="color:#8D8D8D">Leverage agile frameworks to provide a robust synopsis for high level overviews. lverall value proposition Organically grow holistic .</p>
              </div>
          </div>
          <div class="col-lg-4 text-center col-sm-6">
              <img src="/img/Icon (4).png" class="img-fluid" alt="">
              <div style="transform:translateY(-95px) ;">
                <h4 class="fw-bold" style="color:#3b3a5e ;">Post Your Advertise</h4>
                <p style="color:#8D8D8D">Leverage agile frameworks to provide a robust synopsis for high level overviews. approaches lverall value proposition.</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pb-5" style="background-color:#F3E8E2;">
      <div class="container">
        <div class="d-flex mb-3 justify-content-between align-items-center">
          <h4 class="fw-bold" style="color:#3b3a5e;">What our customers <br> say about us</h4>
          <div class="d-flex gap-3">
            <div onclick="moveSlide(-1)" class="bg-white text-center hover" style="border-radius: 50%;color:#FFBB50;width: 40px;height: 40px;cursor:pointer;"><svg class="svg-inline--fa fa-arrow-left mt-2" style="font-size: 23px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"></path></svg><!-- <i class="fa-solid fa-arrow-left mt-2" style="font-size:23px ;"></i> Font Awesome fontawesome.com --></div>
            <div onclick="moveSlide(1)" class="text-white text-center hover" style="border-radius: 50%;background-color:#FFBB50;width: 40px;height: 40px;cursor:pointer;"><svg class="svg-inline--fa fa-arrow-right mt-2" style="font-size: 23px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right mt-2" style="font-size:23px ;"></i> Font Awesome fontawesome.com --></div>
          </div>
        </div>
      </div>
      <div class="container-fluid d-flex gap-4 overflow-hidden" id="carousel-container">
        <div id="customer-carousel" class="d-flex gap-3 transition" style="transform: translateX(0%);">
          <!-- Customer divs here -->
          <div class="d-flex flex-column customers-container customer-slide">
            <div>
             <div class="p-4 mb-3 customers">
               <p>Distinctively re-engineer revolutionary services and <span class="fw-bold">premium  At vero accusamus</span> et iustoDignissimos ducimus qui blanditiis praesentium voluptatum  <svg class="svg-inline--fa fa-sun" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sun" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 159.1c-53.02 0-95.1 42.98-95.1 95.1S202.1 351.1 256 351.1s95.1-42.98 95.1-95.1S309 159.1 256 159.1zM509.3 347L446.1 255.1l63.15-91.01c6.332-9.125 1.104-21.74-9.826-23.72l-109-19.7l-19.7-109c-1.975-10.93-14.59-16.16-23.72-9.824L256 65.89L164.1 2.736c-9.125-6.332-21.74-1.107-23.72 9.824L121.6 121.6L12.56 141.3C1.633 143.2-3.596 155.9 2.736 164.1L65.89 256l-63.15 91.01c-6.332 9.125-1.105 21.74 9.824 23.72l109 19.7l19.7 109c1.975 10.93 14.59 16.16 23.72 9.824L256 446.1l91.01 63.15c9.127 6.334 21.75 1.107 23.72-9.822l19.7-109l109-19.7C510.4 368.8 515.6 356.1 509.3 347zM256 383.1c-70.69 0-127.1-57.31-127.1-127.1c0-70.69 57.31-127.1 127.1-127.1s127.1 57.3 127.1 127.1C383.1 326.7 326.7 383.1 256 383.1z"></path></svg><!-- <i class="fa-solid fa-sun"></i> Font Awesome fontawesome.com --> deleniti atque corrupti quos dolores .</p>
             </div>
             <div class="d-flex gap-2 align-items-center">
               <img src="/img/boy.jpg" class="img-fluid" style="width:60px ;height: 60px;border-radius:50%" alt="">
               <div>
                 <h6 class="fw-bold" style="color:#3b3a5e">Victor Murphy</h6>
                 <p class="m-0" style="color:#B16642 ;">Happy Customers</p>
               </div>
             </div>
            </div>
         </div>
         <div class="d-flex flex-column customers-container customer-slide">
            <div>
             <div class="p-4 mb-3 customers">
               <p>Completely synergize resource taxing <span class="fw-bold">relationships</span> via premier. <svg class="svg-inline--fa fa-link" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z"></path></svg><!-- <i class="fa-solid fa-link"></i> Font Awesome fontawesome.com --> Professionally cultivate one-to-one customer service with robust ideas.</p>
               <p>Dynamically <span class="fw-bold" style="color:#3b3a5e ;">innovate resource-leveling customer</span> service for state of the art customer service.</p>
             </div>
             <div class="d-flex gap-2 align-items-center">
               <img src="/img/boy.jpg" class="img-fluid" style="width:60px ;height: 60px;border-radius:50%" alt="">
               <div>
                 <h6 class="fw-bold" style="color:#3b3a5e">Victor Murphy</h6>
                 <p class="m-0" style="color:#B16642 ;">Happy Customers</p>
               </div>
             </div>
            </div>
         </div>
         <div class="d-flex flex-column customers-container customer-slide">
           <div>
            <div class="p-4 mb-3 customers">
              <p>Distinctively re-engineer revolutionary services and <span class="fw-bold">premium</span> At vero accusamus et iustoDignissimos .</p>
            </div>
            <div class="d-flex gap-2 align-items-center">
              <img src="/img/boy.jpg" class="img-fluid" style="width:60px ;height: 60px;border-radius:50%" alt="">
              <div>
                <h6 class="fw-bold" style="color:#3b3a5e">Victor Murphy</h6>
                <p class="m-0" style="color:#B16642 ;">Happy Customers</p>
              </div>
            </div>
           </div>
        </div>
          <div class="d-flex flex-column customers-container customer-slide">
            <div>
             <div class="p-4 mb-3 customers">
               <p>Distinctively re-engineer revolutionary services and <span class="fw-bold">premium  At vero accusamus</span> et iustoDignissimos ducimus qui blanditiis praesentium voluptatum  <svg class="svg-inline--fa fa-sun" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sun" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 159.1c-53.02 0-95.1 42.98-95.1 95.1S202.1 351.1 256 351.1s95.1-42.98 95.1-95.1S309 159.1 256 159.1zM509.3 347L446.1 255.1l63.15-91.01c6.332-9.125 1.104-21.74-9.826-23.72l-109-19.7l-19.7-109c-1.975-10.93-14.59-16.16-23.72-9.824L256 65.89L164.1 2.736c-9.125-6.332-21.74-1.107-23.72 9.824L121.6 121.6L12.56 141.3C1.633 143.2-3.596 155.9 2.736 164.1L65.89 256l-63.15 91.01c-6.332 9.125-1.105 21.74 9.824 23.72l109 19.7l19.7 109c1.975 10.93 14.59 16.16 23.72 9.824L256 446.1l91.01 63.15c9.127 6.334 21.75 1.107 23.72-9.822l19.7-109l109-19.7C510.4 368.8 515.6 356.1 509.3 347zM256 383.1c-70.69 0-127.1-57.31-127.1-127.1c0-70.69 57.31-127.1 127.1-127.1s127.1 57.3 127.1 127.1C383.1 326.7 326.7 383.1 256 383.1z"></path></svg><!-- <i class="fa-solid fa-sun"></i> Font Awesome fontawesome.com --> deleniti atque corrupti quos dolores .</p>
             </div>
             <div class="d-flex gap-2 align-items-center">
               <img src="/img/boy.jpg" class="img-fluid" style="width:60px ;height: 60px;border-radius:50%" alt="">
               <div>
                 <h6 class="fw-bold" style="color:#3b3a5e">Victor Murphy</h6>
                 <p class="m-0" style="color:#B16642 ;">Happy Customers</p>
               </div>
             </div>
            </div>
         </div>
         <div class="d-flex flex-column customers-container customer-slide">
            <div>
             <div class="p-4 mb-3 customers">
               <p>Completely synergize resource taxing <span class="fw-bold">relationships</span> via premier. <svg class="svg-inline--fa fa-link" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z"></path></svg><!-- <i class="fa-solid fa-link"></i> Font Awesome fontawesome.com --> Professionally cultivate one-to-one customer service with robust ideas.</p>
               <p>Dynamically <span class="fw-bold" style="color:#3b3a5e ;">innovate resource-leveling customer</span> service for state of the art customer service.</p>
             </div>
             <div class="d-flex gap-2 align-items-center">
               <img src="/img/boy.jpg" class="img-fluid" style="width:60px ;height: 60px;border-radius:50%" alt="">
               <div>
                 <h6 class="fw-bold" style="color:#3b3a5e">Victor Murphy</h6>
                 <p class="m-0" style="color:#B16642 ;">Happy Customers</p>
               </div>
             </div>
            </div>
         </div>
         <div class="d-flex flex-column customers-container customer-slide">
           <div>
            <div class="p-4 mb-3 customers">
              <p>Distinctively re-engineer revolutionary services and <span class="fw-bold">premium</span> At vero accusamus et iustoDignissimos .</p>
            </div>
            <div class="d-flex gap-2 align-items-center">
              <img src="/img/boy.jpg" class="img-fluid" style="width:60px ;height: 60px;border-radius:50%" alt="">
              <div>
                <h6 class="fw-bold" style="color:#3b3a5e">Victor Murphy</h6>
                <p class="m-0" style="color:#B16642 ;">Happy Customers</p>
              </div>
            </div>
           </div>
        </div>
          <!-- Repeat similar blocks for each customer review -->
        </div>
      </div>
    </section>
    <section class="mt-5">
      <div class="container">
          <div class="d-flex pb-4 border-bottom mb-5 justify-content-between flex-wrap">
            <div class="text-center">
              <h3 class="fw-bold m-0" style="color:#3b3a5e;">56,180</h3>
              <p class="fw-bold" style="color:#3b3a5e;">Properties for sale</p>
            </div>
            <div class="text-center">
              <h3 class="fw-bold m-0" style="color:#3b3a5e;">99%</h3>
              <p class="fw-bold" style="color:#3b3a5e;">Properties for rent</p>
            </div>
            <div class="text-center">
              <h3 class="fw-bold m-0" style="color:#3b3a5e;">25K+</h3>
              <p class="fw-bold" style="color:#3b3a5e;">New launches</p>
            </div>
            <div class="text-center">
              <h3 class="fw-bold m-0" style="color:#3b3a5e;">2,918</h3>
              <p class="fw-bold" style="color:#3b3a5e;">Customer Satisfaction</p>
            </div>
          </div>
          <div class="text-center pt-5">
            <span class="new-lanches-span p-2"><span style="color:#FFBB50;">06</span> Neighborhoods</span>
            <h3 class="fw-bold py-3" style="color:#3b3a5e">Discover The Neighborhoods</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 text-center mb-3">
              <div class="image-container position-relative">
                <img src="/img/new-york.png" class="img-fluid w-100" alt="Image 1">
                <span class="countries-arrow hover"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                <div class="text-container">
                  <h5 class="text-white">New York</h5>
                  <h6 style="color: #FFBB50;">250 Property</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-3">
              <div class="image-container position-relative">
                <img src="/img/atalanta.png" class="img-fluid w-100" alt="Image 1">
                <span class="countries-arrow hover"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                <div class="text-container">
                  <h5 class="text-white">Atlanta</h5>
                  <h6 style="color: #FFBB50;">120 Property</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-3">
              <div class="image-container position-relative">
                <img src="/img/singapore.png" class="img-fluid w-100" alt="Image 1">
                <span class="countries-arrow hover"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                <div class="text-container">
                  <h5 class="text-white">Singapore</h5>
                  <h6 style="color: #FFBB50;">53 Property</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 text-center mb-3">
              <div class="image-container position-relative">
                <img src="/img/paris.png" class="img-fluid w-100" alt="Image 1">
                <span class="countries-arrow hover"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                <div class="text-container">
                  <h5 class="text-white">Paris</h5>
                  <h6 style="color: #FFBB50;">99 Property</h6>
                </div>
              </div>
            </div>
          </div>
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
    $('#find').on('click',function(){
var property_type = document.getElementById("property_type").value;
var bedrooms_no = document.getElementById("bedrooms_no").value;
var Bathrooms_no = document.getElementById("Bathrooms_no").value;
var min_size = document.getElementById("min_size").value;
var max_size = document.getElementById("max_size").value;
var checkboxes1 = document.querySelectorAll('input[name="furnishing"]');
var checkboxes2 =  document.querySelectorAll('input[name="completion_status"]');
var checkboxes3 = document.querySelectorAll('input[name="virtual_viewings"]');
var furnishingValue = null;
checkboxes1.forEach(function(checkbox) {
                if (checkbox.checked) {
                    // Do something with the checked checkbox
                    furnishingValue = checkbox.value;
                } else {
                    // Deselect the checkbox if needed
                    checkbox.checked = false;
                }
            });
var completionStatusValue = null;            
            checkboxes2.forEach(function(checkbox) {
                if (checkbox.checked) {
                    // Do something with the checked checkbox
                    completionStatusValue = checkbox.value;
                } else {
                    // Deselect the checkbox if needed
                    checkbox.checked = false;
                }
            });
var virtualViewingsValue = null;            
            
 checkboxes3.forEach(function(checkbox) {
                if (checkbox.checked) {
                    // Do something with the checked checkbox
                    virtualViewingsValue = checkbox.value;
                } else {
                    // Deselect the checkbox if needed
                    checkbox.checked = false;
                }
            });            

          
        
        
        console.log('f'+furnishingValue);

 
            console.log('cs'+completionStatusValue);
          
     console.log('vv'+virtualViewingsValue);       
const checkAmenities = document.querySelectorAll('input[name="amenities"]:checked');
            const values = [];
            checkAmenities.forEach((checkbox) => {
                values.push(checkbox.value);
            });          
            console.log(values);
console.log("prop:"+property_type);
$.ajax({
type : 'get',
url : "{{ route('website.posted.advertises') }}",
data:{'property_type':property_type,'bedrooms_no':bedrooms_no,'Bathrooms_no':Bathrooms_no,'furnishing':furnishingValue,'completion_status':completionStatusValue,
     'virtual_viewings':virtualViewingsValue,'min_size':min_size,'max_size':max_size,'amenities':values},
success:function(data){
    console.log(data);
    $('#posts').html('');

$('#posts').append(data);

}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
<script>
//$(document).ready(function() {
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

//});	
</script>


@endpush