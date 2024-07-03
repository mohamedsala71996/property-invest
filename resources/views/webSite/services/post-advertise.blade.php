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
        <div class="btn fw-bold hover text-white" style="background-color: #3b3a5e;display:none;">
          Login/Signup
        </div>
      </div>
      <div class="container">
        
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
<section class="membership p-5">
        <h5 style="color: #712600;" class="text-center fw-bold"><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->Post Your Advertise</h5>
        <div class="mt-5 container">
            <form  method="POST" action="{{ route('website.postadvertise.store') }}" enctype="multipart/form-data">
            @csrf  
          <div class="d-flex justify-content-center gap-2 m-4">
            <div class="ms-5 ps-md-3">
              <label class="mb-1">Advertise Duration:</label>
              <div class="form-group" style="width:200px ;">
                <select class="form-select" id="duration" name="duration" style="color: #3b3a5e;" aria-label="Default select example">
                    <option value="1">1 month</option>
                    <option value="2">2 month</option>
                    <option value="3">3 month</option>
                    <option value="4">4 month</option>
                    <option value="5">5 month</option>
                    <option value="6">6 month</option>
                    <option value="7">7 month</option>
                    <option value="8">8 month</option>
                    <option value="9">9 month</option>
                    <option value="10">10 month</option>
                    <option value="11">11 month</option>
                    <option value="12">1 year</option>
                  </select>
                  @error('duration')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div style="width:200px ;">
              <label class="mb-1">Price:</label>
              <div class="d-flex gap-2 align-items-center">
                <input type="text" id="duration_price" name="duration_price" class="form-control" style="width:100px ;" value="500" readonly>
                <label class="mb-1">LE</label>
                @error('duration_price')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
                    <div class="d-flex flex-wrap justify-content-around align-items-center">
              <div class="form-check bg-white ps-5 p-2" style="width: 300px;border-radius: 5px;">
                <input class="form-check-input" type="radio" name="new_resell" id="for-new" value="new">
                <label class="form-check-label fw-bold" for="for-new" style="color:#737373 ;">
                 New Launch
                </label>
                @error('new_resell')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <h5 class="fw-bold">Or</h5>
              <div class="form-check bg-white ps-5 p-2" style="width: 300px;border-radius: 5px;">
                <input class="form-check-input" type="radio" name="new_resell" id="for-resell" value="resell">
                <label class="form-check-label fw-bold" for="for-resell" style="color:#737373 ;">
                  ReSell
                </label>
                @error('new_resell')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div><br/>
            <div class="d-flex flex-wrap justify-content-around align-items-center">
              <div class="form-check bg-white ps-5 p-2" style="width: 300px;border-radius: 5px;">
                <input class="form-check-input" type="radio" name="rent_sell" id="for-rent" value="rent">
                <label class="form-check-label fw-bold" for="for-rent" style="color:#737373 ;">
                  For Rent
                </label>
                @error('rent_sell')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <h5 class="fw-bold">Or</h5>
              <div class="form-check bg-white ps-5 p-2" style="width: 300px;border-radius: 5px;">
                <input class="form-check-input" type="radio" name="rent_sell" id="for-sell" value="sell">
                <label class="form-check-label fw-bold" for="for-sell" style="color:#737373 ;">
                  For Sell
                </label>
                @error('rent_sell')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="bg-white w-75 mx-auto my-4 p-4" style="border-radius: 5px;">
              <input type="text" id="price" name="price" class="form-control m-auto price-input" placeholder="Price .....">
              <h5 class="fw-bold mt-2 mb-3" style="color: #3B3A5D;">Payment system</h5>
              <div class="d-flex flex-wrap mt-2 mb-5 justify-content-around align-items-center">
                <div class="form-check bg-white ps-5 p-2 border" style="width: 250px;border-radius: 5px;">
                  <input class="form-check-input" type="radio" onchange="cashFunction()" name="cash_installment" id="cash" value="cash">
                  <label class="form-check-label fw-bold" for="cash" style="color:#737373 ;">
                    Cash
                  </label>
                  @error('cash_installment')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <h5 class="fw-bold">Or</h5>
                <div class="form-check bg-white ps-5 p-2 border" style="width: 250px;border-radius: 5px;">
                  <input class="form-check-input" type="radio" onchange="installmentFunction()" name="cash_installment" id="installment" value="installment">
                  <label class="form-check-label fw-bold" for="installment" style="color:#737373 ;">
                    Installment
                  </label>
                  @error('cash_installment')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div id="installment-options" class="row d-none mt-4">
                <div class="col-md-6 col-lg-4 mb-2 d-flex flex-column">
                  <label class="mb-1">Advance payment</label>
                  <input type="text" id="advance_payment" name="advance_payment" class="form-control w-100" placeholder="advance payment .... ">
                  @error('advance_payment')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-6 col-lg-4 mb-2 d-flex flex-column">
                  <label class="mb-1">Remaining amount </label>
                  <input type="text" id="remaining_amount" name="remaining_amount" class="form-control w-100" placeholder="remaining amount .... ">
                  @error('remaining_amount')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-6 col-lg-4 mb-2 d-flex flex-column">
                  <label class="mb-1">Duration</label>
                  <div class="form-group  ">
                    <select class="form-select" id="installment_duration" name="installment_duration" style="color: #3b3a5e;" aria-label="Default select example">
                        <option value="0" selected="" disabled="">Duration:</option>
                        <option value="1">1 month</option>
                        <option value="2">3 month</option>
                        <option value="3">6 month</option>
                        <option value="4">1 year</option>
                        <option value="5">2 year</option>
                        <option value="6">3 year</option>
                        <option value="7">6 year</option>
                        <option value="8">10 year</option>
                      </select>
                  </div>
                  @error('installment_duration')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="text-center mt-3">
                  <input type="text" id="total_amount" name="total_amount" class="form-control m-auto price-input" placeholder="total amount .... ">
                  @error('total_amount')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Basics</h3>
              <div class="row mt-3">
                <div class="col-md-4 mt-2">
                  <div class="form-group  ">
                    <select id="property_type" name="property_type" class="form-select" style="color: #3b3a5e;" aria-label="Default select example">
                        <option value="0" selected="">Property Type</option>
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
                      @error('property_type')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <input type="text" id="property_size" name="property_size" class="form-control w-100" placeholder="property size (sqm) ">
                  @error('property_size')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-4 mt-2">
                  <input type="text" id="location" name="location" class="form-control w-100" placeholder="location ">
                  @error('location')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-4 mt-2">
                  <div class="form-group  ">
                    <select id="bedrooms_no" name="bedrooms_no" class="form-select" style="color: #3b3a5e;" aria-label="Default select example">
                        <option value="0" selected="" disabled="">Bedrooms:</option>
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
                      @error('bedrooms_no')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <div class="form-group  ">
                    <select id="Bathrooms_no" name="Bathrooms_no" class="form-select" style="color: #3b3a5e;" aria-label="Default select example">
                        <option value="0" selected="" disabled="">Bathrooms:</option>
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
                      @error('Bathrooms_no')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <div class="form-group  ">
                    <select id="floors_no" name="floors_no"  class="form-select" style="color: #3b3a5e;" aria-label="Default select example">
                        <option value="0" selected="" disabled="">Floor:</option>
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
                      @error('floors_no')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-4 mt-4">
                  <div class="form-group">
                    <select id="Construction_year" name="Construction_year" class="form-select" style="color: #3b3a5e;" aria-label="Default select example">
                      <option value="0" selected="" disabled="">Year Construction:</option>
                      <!-- Year options from 1900 to 2024 -->
                      <option value="Under-Construction">Under Construction</option>
                      <option value="1900">1900</option>
                      <option value="1901">1901</option>
                      <option value="1902">1902</option>
                      <option value="1903">1903</option>
                      <option value="1904">1904</option>
                      <option value="1905">1905</option>
                      <option value="1906">1906</option>
                      <option value="1907">1907</option>
                      <option value="1908">1908</option>
                      <option value="1909">1909</option>
                      <option value="1910">1910</option>
                      <option value="1911">1911</option>
                      <option value="1912">1912</option>
                      <option value="1913">1913</option>
                      <option value="1914">1914</option>
                      <option value="1915">1915</option>
                      <option value="1916">1916</option>
                      <option value="1917">1917</option>
                      <option value="1918">1918</option>
                      <option value="1919">1919</option>
                      <option value="1920">1920</option>
                      <option value="1921">1921</option>
                      <option value="1922">1922</option>
                      <option value="1923">1923</option>
                      <option value="1924">1924</option>
                      <option value="1925">1925</option>
                      <option value="1926">1926</option>
                      <option value="1927">1927</option>
                      <option value="1928">1928</option>
                      <option value="1929">1929</option>
                      <option value="1930">1930</option>
                      <option value="1931">1931</option>
                      <option value="1932">1932</option>
                      <option value="1933">1933</option>
                      <option value="1934">1934</option>
                      <option value="1935">1935</option>
                      <option value="1936">1936</option>
                      <option value="1937">1937</option>
                      <option value="1938">1938</option>
                      <option value="1939">1939</option>
                      <option value="1940">1940</option>
                      <option value="1941">1941</option>
                      <option value="1942">1942</option>
                      <option value="1943">1943</option>
                      <option value="1944">1944</option>
                      <option value="1945">1945</option>
                      <option value="1946">1946</option>
                      <option value="1947">1947</option>
                      <option value="1948">1948</option>
                      <option value="1949">1949</option>
                      <option value="1950">1950</option>
                      <option value="1951">1951</option>
                      <option value="1952">1952</option>
                      <option value="1953">1953</option>
                      <option value="1954">1954</option>
                      <option value="1955">1955</option>
                      <option value="1956">1956</option>
                      <option value="1957">1957</option>
                      <option value="1958">1958</option>
                      <option value="1959">1959</option>
                      <option value="1960">1960</option>
                      <option value="1961">1961</option>
                      <option value="1962">1962</option>
                      <option value="1963">1963</option>
                      <option value="1964">1964</option>
                      <option value="1965">1965</option>
                      <option value="1966">1966</option>
                      <option value="1967">1967</option>
                      <option value="1968">1968</option>
                      <option value="1969">1969</option>
                      <option value="1970">1970</option>
                      <option value="1971">1971</option>
                      <option value="1972">1972</option>
                      <option value="1973">1973</option>
                      <option value="1974">1974</option>
                      <option value="1975">1975</option>
                      <option value="1976">1976</option>
                      <option value="1977">1977</option>
                      <option value="1978">1978</option>
                      <option value="1979">1979</option>
                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                    </select>
                    @error('Construction_year')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>   
                 <div class="col-md-4">
                     <h3 style="color: #3B3A5D;font-size:16px;" id="logo-title">Logo</h3>
                     <div class="m-auto upload-image flex-column justify-content-center align-items-center" onclick="document.getElementById('logo-input').click()" style="height:100px;" id="logo-input-1">
                      <svg class="svg-inline--fa fa-cloud-arrow-up color" style="font-size: 35px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cloud-arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM223 263C213.7 272.4 213.7 287.6 223 296.1C232.4 306.3 247.6 306.3 256.1 296.1L296 257.9V392C296 405.3 306.7 416 320 416C333.3 416 344 405.3 344 392V257.9L383 296.1C392.4 306.3 407.6 306.3 416.1 296.1C426.3 287.6 426.3 272.4 416.1 263L336.1 183C327.6 173.7 312.4 173.7 303 183L223 263z"></path></svg><!-- <i class="fa-solid fa-cloud-arrow-up color" style="font-size:35px ;"></i> Font Awesome fontawesome.com -->
                      <p class="color font-20 m-0">Upload your image</p>
                      <p class="m-0" style="color:#555 ;">or drag them into the box</p>
                      <input  id="logo-input" name="logo" type="file" class="d-none"  onchange="addLogoImg()">
                      
                  </div>
                      </div>
                       <div class="col-md-4 mt-4">
                  <div class="form-group">
                       <input type="text" id="developer_name" name="developer_name" class="form-control w-100" placeholder="Developer Name ">
                  @error('developer_name')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                      </div>
                      </div>
                      
                      <div class="col-md-4 mt-4" id="gj_datepicker">
                  <div class="form-group">
                       <input type="text" id="delivery_date" name="delivery_date" width="340" class="form-control">
                  @error('delivery_date')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                    </div>
                      </div>
                      <div class="col-md-4 mt-4">
                           <div class="uploaded-images-container-1 mt-3"></div>
                      </div>
              </div>
            </div>
            <div class="px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Furnishing</h3>
              <div class="row mt-3">
                        <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="1" name="furnishing" />&nbsp;&nbsp;All Furnishings</label>
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label"><input type="checkbox" class="form-check-input" value="2" name="furnishing" />&nbsp;&nbsp;Furnished</label>
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label"><input type="checkbox" class="form-check-input" value="3" name="furnishing" />&nbsp;&nbsp;Unfurnished</label>
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label"><input type="checkbox" class="form-check-input" value="4" name="furnishing" />&nbsp;&nbsp;Partly Furnished</label>
                  </div>
                </div>
                  </div>
                  </div>
             <div class="px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Completion Status</h3>
              <div class="row mt-3">
                   <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="1" name="completion_status" />&nbsp;&nbsp;Any</label>
                  </div>
                </div>
                   <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="2" name="completion_status" />&nbsp;&nbsp;Off-plan</label>
                  </div>
                </div>
                   <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="3" name="completion_status" />&nbsp;&nbsp;Ready</label>
                  </div>
                </div>
                  </div>
                  </div>
             <div class="px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Amenities</h3>
              <div class="row mt-3">
                           <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="1" name="amenities[]" />&nbsp;&nbsp;Central A/C </label>
                  </div>
                </div>
                         <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="2" name="amenities[]" />&nbsp;&nbsp; Maids Room</label>
                  </div>
                </div>
                         <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="3" name="amenities[]" />&nbsp;&nbsp;Balcony</label>
                  </div>
                </div>
                 <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="4" name="amenities[]" />&nbsp;&nbsp; Shared Pool</label>
                  </div>
                </div>
                 <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="5" name="amenities[]" />&nbsp;&nbsp; Shared Spa</label>
                  </div>
                </div>
                 <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="6" name="amenities[]" />&nbsp;&nbsp;Shared Gym</label>
                  </div>
                </div>
                 <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="7" name="amenities[]" />&nbsp;&nbsp; Concierge Service</label>
                  </div>
                </div>
                 <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="8" name="amenities[]" />&nbsp;&nbsp; Covered Parking</label>
                  </div>
                </div>
                 <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="9" name="amenities[]" />&nbsp;&nbsp; View of Water</label>
                  </div>
                </div>
                  </div>
                  </div>
             <div class="px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Virtual Viewings</h3>
              <div class="row mt-3">
                    <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="1" name="virtual_viewings" />&nbsp;&nbsp; All Virtual Viewings</label>
                  </div>
                </div>
                  <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="2" name="virtual_viewings" />&nbsp;&nbsp; 360 Tours</label>
                  </div>
                </div>
                  <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="3" name="virtual_viewings" />&nbsp;&nbsp; Vedio Tours</label>
                  </div>
                </div>
                  <div class="col-md-4 mt-2">
                  <div class="form-group">
                       <label class="form-check-label">  <input type="checkbox" class="form-check-input" value="4" name="virtual_viewings" />&nbsp;&nbsp; Live Viewings</label>
                  </div>
                </div>
                  </div>
                  </div>      
            <div class="row px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Photos</h3>
              <div class="col-md-6 mb-3" style="color: #3B3A5D;">
                  <div class="m-auto upload-image d-flex flex-column justify-content-center align-items-center" onclick="document.getElementById('upload-image-input').click()">
                      <svg class="svg-inline--fa fa-cloud-arrow-up color" style="font-size: 35px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cloud-arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM223 263C213.7 272.4 213.7 287.6 223 296.1C232.4 306.3 247.6 306.3 256.1 296.1L296 257.9V392C296 405.3 306.7 416 320 416C333.3 416 344 405.3 344 392V257.9L383 296.1C392.4 306.3 407.6 306.3 416.1 296.1C426.3 287.6 426.3 272.4 416.1 263L336.1 183C327.6 173.7 312.4 173.7 303 183L223 263z"></path></svg><!-- <i class="fa-solid fa-cloud-arrow-up color" style="font-size:35px ;"></i> Font Awesome fontawesome.com -->
                      <p class="color font-20 m-0">Upload your image</p>
                      <p class="m-0" style="color:#555 ;">or drag them into the box</p>
                      <input requiered="" name="files[]" type="file" class="d-none" id="upload-image-input" onchange="addImg()" accept="image/*" multiple="">
                      @error('files')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
              </div>
              <div class="col-md-6 mb-3">
              <input type="text" id="th_d_image_path" name="th_d_image_path" class="form-control" placeholder="3D Image Path .... ">
              @error('th_d_image_path')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="row uploaded-images-container mt-3"></div>
            </div>  
            <div class="px-4 py-3">
              <h3 class="fw-bold" style="color: #3B3A5D;">Contact Information</h3>
              <div class="row mt-3 mb-3 ">
                <div class="col-md-4 my-2">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name .... ">
                  @error('name')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-4 my-2">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email .... ">
                  @error('email')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-4 my-2">
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone .... ">
                  @error('phone')
                <div class="w-50 alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-4 my-2">
                  <button  class="btn btn-danger" id="unit_location">Check on location on google map</<button>
                </div>
              </div> 
              <div class="row mt-3 mb-3 ">
               <!--<input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->
              <div id="map"></div>
              <input type="hidden" id="latitude" name="latitude" class="form-control">
              <input type="hidden" id="longitude" name="longitude" class="form-control">
              </div>
              <h3 class="fw-bold mb-4" style="color: #3B3A5D;">Title &amp; Description</h3>
              <textarea id="title" name="title" class="form-control p-3 mb-3" placeholder="title ...." rows="5"></textarea>
              <div class="d-flex justify-content-end">
                <p class="fw-bold" style="color: #3B3A5D;">Apply suggested Description</p>
              </div>
              <textarea id="description" name="description" class="form-control p-3 mb-3" placeholder="description ...." rows="5"></textarea>
            </div>
            <div class="d-flex justify-content-end gap-3">
              <button class="btn hover btn-danger">Cancel</button>
              <button type="submit" class="btn hover text-light" style="background-color: #3B3A5D;">Publish</button>
            </div>
</form>
        </div>
    </section>
@endsection
@push('scripts')
<script src="/js/add-photos.js"></script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEedfnh06jlrEqXFXZtZJFD3s04iP2Bic&libraries=places&callback=initMap" async defer></script>-->
<!--  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>-->
<!--<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>-->
<script>
        var mapInitialized = false;
        var map;
        var marker;

        document.getElementById('unit_location').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('map').style.display = 'block';

            if (!mapInitialized) {
                var tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> Contributors'
            });
            
            var latlng = L.latLng(0, 0);
            
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
        });
        function updateLatLng(lat,lng) {
        document.getElementById('latitude').value = marker.getLatLng().lat;
        document.getElementById('longitude').value = marker.getLatLng().lng;
        }
    </script>
        
     <script>
    

    // map.addEventListener('click', function() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(function(position) {
    //             var lat = position.coords.latitude;
    //             var lon = position.coords.longitude;

    //             var userMarker = L.marker([lat, lon]).addTo(map);
    //             map.setView([lat, lon], 13);

         
    //         });
    //     } else {
    //         alert("Geolocation is not supported by this browser.");
    //     }
    // });
</script>
   
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the radio buttons and textbox
            var newLunachRadio = document.getElementById('for-new');
            var resellRadio = document.getElementById('for-resell');
            var logo_title = document.getElementById('logo-title');
            var logo = document.getElementById('logo-input-1');
            var developer_name = document.getElementById('developer_name');
            var delivery_date = document.getElementById('delivery_date');
             var gj_datepicker = document.getElementById('gj_datepicker');

            // Function to toggle textbox visibility
            function toggleTextbox() {
                if (newLunachRadio.checked) {
                    logo_title.style.display = 'block';
                     logo.style.display = 'flex';
                    developer_name.style.display = 'block';
                    gj_datepicker.style.display = 'block';
                     delivery_date.style.display = 'block';
                   
                } else {
                    logo_title.style.display = 'none';
                     logo.style.display = 'none';
                    developer_name.style.display = 'none';
                    delivery_date.style.display = 'none';
                    gj_datepicker.style.display = 'none';
                    
                }
            }

            // Add event listeners to the radio buttons
            newLunachRadio.addEventListener('change', toggleTextbox);
            resellRadio.addEventListener('change', toggleTextbox);
        });
    </script>
   
<script src='https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js'></script>
     <script>
        $(document).ready(function() {
            $('#delivery_date').datepicker({
                // format: 'mm/dd/yyyy',
                // autoclose: true,
                 todayHighlight: true,
                uiLibrary: 'bootstrap5'
            });
        });
    </script>
    <script>
        document.getElementById('price').onkeyup = function() {
    let price = this.value;
    document.getElementById('total_amount').value = price;
}

    </script>
@endpush 