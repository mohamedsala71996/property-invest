@extends('layouts.dashboard.app')
@section('content')
<div class="app-content-header"> <!--begin::Container-->
<div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Edit Completion Status</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Edit Completion Status
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
                   
                    <form action="{{route('dashboard.completion.status.update',$completionStatus->id)}}" method="POST">
                    
                        @csrf
                        <div class="form-group">
                            <label for="address">English Status</label>
                            <input type="text" id="status" name="status" class="form-control" value="{{$completionStatus->status}}">
                        </div>
                        <div class="form-group">
                            <label for="email"> Arabic Status</label>
                            <input type="text" id="status_ar" name="status_ar" class="form-control" value="{{$completionStatus->status_ar}}">
                        </div>
                       
                        <button type="submit" class="btn btn-primary m-3">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection