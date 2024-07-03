<nav class="navbar navbar-expand-lg navbar-white bg-white px-3 py-3">
          <a class="navbar-brand fw-bold" style="color: #3b3a5e" href="#"><img src="/img/Icon.svg" style="width:60px ;height:40px" alt=""> Propertyinvest</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <span style="color: #3b3a5e"><svg class="svg-inline--fa fa-bars p-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path></svg><!-- <i class="fa-solid fa-bars p-1"></i> Font Awesome fontawesome.com --></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('website.index')}}">{{ trans('menu.home') }} <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('website.news.index')}}">{{ trans('menu.news') }}</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                {{ trans('menu.services') }}</a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="{{route('website.postadvertise.create')}}">
                    {{ trans('menu.post advertise') }} </a>
                  </li>
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="membership.html">{{ trans('menu.membership') }}</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('website.new.launches')}}">{{ trans('menu.new launches') }}<svg class="svg-inline--fa fa-star ms-1" style="color: #712600;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <i class="fa-solid fa-star ms-1" style="color: #712600"></i> Font Awesome fontawesome.com --></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" id="propertiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                {{ trans('menu.properties') }}</a>
                <ul class="dropdown-menu" aria-labelledby="propertiesDropdown">
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="#">
                    {{ trans('menu.buy') }}</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="#"> {{ trans('menu.rent') }}</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" id="countryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                {{ trans('menu.country') }}</a>
                <ul class="dropdown-menu text-center" aria-labelledby="countryDropdown">
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="#">
                      <img src="/img/egypt.png" style="width:20px ;" class="img-fluid" alt=""> Egypt</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="#"> <img src="/img/emirates.png" style="width:20px ;" class="img-fluid" alt=""> Emirates</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-secondary fw-bold" href="#"> <img src="/img/saudi.png" style="width:20px ;" class="img-fluid" alt=""> Saudi Arabia</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="btn hover fw-bold text-white" style="background-color: #3b3a5e">
              {{ trans('home.contact') }} 
              </div>
            </form>
          </div>
        </nav>