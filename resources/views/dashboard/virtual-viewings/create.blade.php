@extends('layouts.dashboard.app')
@section('content')
<div class="app-content-header"> <!--begin::Container-->
<div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Add Virtual Viewing</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Add Virtual Viewing
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
                   
                    <form action="{{route('dashboard.virtual.viewings.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="address">English Type</label>
                            <input type="text" id="type" name="type" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"> Arabic Type</label>
                            <input type="text" id="type_ar" name="type_ar" class="form-control">
                        </div>
                       
                        <button type="submit" class="btn btn-primary m-3">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection