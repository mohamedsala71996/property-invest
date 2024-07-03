@extends('layouts.dashboard.app')
@section('content')
<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Post Details</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Post Details
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> 
            <div class="app-content">
            @php $duration = ['1 month','2 month','3 month','4 month','5 month','6 month','7 month',
                                      '8 month','9 month','10 month','11 month','1 year'];
                                      
                 $payment_duration = ['1 month','3 month','6 month','1 year','2 year','3 year','6 year','10 year'];              
                 $property_types  = ['Apartment','Villa','Townhouse','Penthouse','Compound','Duplex','Full Floor','Half Floor',
                                     'Whole Building','Land','Bulk Sale Unit','Bungalow','Hotel & Hotel Apartment'];   
                 $bedrooms = ['Studio','0','1','2','3','4','5','6','7','+7'];   
                 $bathrooms = ['0','1','2','3','4','5','6','7','+7'];
                 $floors =  ['0','1','2','3','4','5','6','7','+7'];                                  
                                      @endphp
<div class="container-fluid">
<div class="row g-4">    
<div class="col-md-12">
<div class="card card-danger card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Post Details</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <sapan style="padding-right:50px;">Post Duration :{{$duration[$post->duration]}}</sapan>
                                    <sapan style="padding-right:50px;">Price :{{$post->duration_price}}</sapan>
                                    <sapan style="padding-right:50px;">For Rent/Sell :{{$post->rent_sell}}</sapan>
                                    <sapan>Price :{{$post->price}}</sapan>
                                    <hr> 
                                    <h6>Payment System</h6>
                                    <sapan style="padding-right:50px;">Cash/Installment :{{$post->cash_installment}}</sapan>
                                    <sapan style="padding-right:50px;">Advance Payment :{{$post->advance_payment}}</sapan>
                                    <sapan style="padding-right:50px;">Remaining Amount :{{$post->remaining_amount}}</sapan>
                                    @if(!is_null($post->installment_duration))
                                    <sapan style="padding-right:50px;">Duration :{{$payment_duration[$post->installment_duration]}}</sapan>
                                    @else
                                    <sapan style="padding-right:50px;">Duration :{{$post->installment_duration}}</sapan>
                                    @endif
                                    <sapan>Total Amount :{{$post->total_amount}}</sapan>
                                    <hr> 
                                    <h6>Basics</h6>
                                    <sapan style="padding-right:50px;">Property Type :{{$property_types[$post->property_type]}}</sapan>
                                    <sapan style="padding-right:50px;">property size (sqm)  :{{$post->property_size}}</sapan>
                                    <sapan style="padding-right:50px;">Location  :{{$post->location}}</sapan>
                                    <sapan style="padding-right:50px;">Bedrooms :{{$bedrooms[$post->bedrooms_no]}}</sapan>
                                    <sapan style="padding-right:50px;">Bathrooms :{{$bathrooms[$post->Bathrooms_no]}}</sapan>
                                    <sapan style="padding-right:50px;">Floor:{{$floors[$post->floors_no]}}</sapan>
                                    <sapan>Year Construction:{{$post->Construction_year}}</sapan>
                                    <hr> 
                                    <h6>Photos</h6>
                                    @php $count=0;@endphp
                                    @foreach($postImages as $postImage)
                                    @php $count++;@endphp
                                    <div id="image-container{{$count}}">
                                    <img id="image{{$count}}" src="/images/post-images/{{$postImage->image_path}}"  width="150px"
            height="150px" alt=""/>
                                    </div>
                                    @endforeach
                                    <hr>
                                    <h6>Contact Information</h6>
                                    <sapan style="padding-right:50px;">Name :{{$post->name}}</sapan>
                                    <sapan style="padding-right:50px;">Email:{{$post->email}}</sapan>
                                    <sapan>Phone:{{$post->phone}}</sapan>
                                    <h6>Location On Google Map</h6>
                                    @if(!is_null($post->latitude) && !is_null($post->longitude))
                                    <input type="hidden" id="latitude" name="latitude" class="form-control" value="{{$post->latitude}}">
                                    <input type="hidden" id="longitude" name="longitude" class="form-control" value="{{$post->longitude}}">
                                    @else
                                    <input type="hidden" id="latitude" name="latitude" class="form-control" value="0">
                                    <input type="hidden" id="longitude" name="longitude" class="form-control" value="0">
                                    @endif
                                    <div id="map" style="height: 500px; width: 100%;"></div><hr>
                                    <h6>Title & Description</h6>
                                    <p>
                                    <sapan>Title:{{$post->title}}</sapan>
                                    </p>
                                    <p>
                                    <sapan>Description:{{$post->description}}</sapan>
                                    </p>

                                </div> <!--end::Body-->
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
@endsection
@push('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
<script>
        function initMap() { 
            // Latitude and Longitude
            var lat = parseFloat(document.getElementById('latitude').value); // Replace with your latitude
            var lon = parseFloat(document.getElementById('longitude').value); // Replace with your longitude

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: lon},
                zoom: 8
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: {lat: lat, lng: lon},
                title: 'Hello World!'
            });
        }

        // Initialize the map when the window has finished loading.
        window.onload = initMap;
    </script>
    <script>
        let scale = 1;
        const image = document.getElementById('image');
        const zoomFactor = 0.1;
        @php $counter=0;@endphp
        @foreach($postImages as $postImage)
        @php $counter++;@endphp
        document.getElementById('image-container{{$counter}}').addEventListener('mouseup', (event) => {
            // Determine the mouse button: left button is 0
            if (event.button === 0) {
                scale += zoomFactor;  // Zoom in on left click
                image{{$counter}}.classList.add('zoomed');
            } else if (event.button === 2) {
                scale = Math.max(1, scale - zoomFactor);  // Zoom out on right click, ensuring scale doesn't go below 1
                if (scale === 1) {
                    image{{$counter}}.classList.remove('zoomed');
                }
            }
            image{{$counter}}.style.transform = `scale(${scale})`;
        });

        // Prevent the context menu from appearing on right click
        document.getElementById('image-container{{$counter}}').addEventListener('contextmenu', (event) => {
            event.preventDefault();
        });
        @endforeach
    </script>
@endpush 