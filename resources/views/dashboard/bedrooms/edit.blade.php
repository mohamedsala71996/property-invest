@extends('layouts.dashboard.app')
@section('content')
<div class="app-content-header"> <!--begin::Container-->
<div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Edit Bedroom</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Edit Bedroom
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> 
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            
                                <!-- <h3 class="card-title mb-3">Add Duration </h3> -->
                <div class="card-body">
                   
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="address">Bedrooms Number</label>
                            <input type="text" id="bedrooms_no" name="bedrooms_no" class="form-control" value="{{$bedroom->bedrooms_no}}">
                        </div>
                        <button type="submit" class="btn btn-primary m-3">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection