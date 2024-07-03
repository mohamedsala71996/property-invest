@extends('layouts.dashboard.app')
@section('content')
<div class="app-content-header"> <!--begin::Container-->
<div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Add New</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Add New
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>
            <div class="app-content">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-12"> <!--begin::Quick Example-->
                            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Add New</div>
                                </div> <!--end::Header--> <!--begin::Form-->
                                <form method="post" action="{{route('dashboard.news.store')}}" enctype="multipart/form-data"> <!--begin::Body-->
                                @csrf  
                                <div class="card-body">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Subject</label>
                                         <input type="text" class="form-control" id="subject" name="subject" placeholder="New Subject">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title" name="title" placeholder="New Title">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Body</label>
                                        <textarea class="form-control" id="body" name="body" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">New Date</label>
                                        <input type="date" class="form-control" id="new_date" name="new_date">
                                        </div>
                                        <div class="input-group mb-3"> <input type="file" class="form-control" id="image" name="image"> <label class="input-group-text" for="inputGroupFile02">Upload Image</label> </div>
                                      
                                    </div> <!--end::Body--> <!--begin::Footer-->
                                    <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                                </form> <!--end::Form-->
                            </div> <!--end::Quick Example--> <!--begin::Input Group-->
                           
                        </div>
</div>
</div>
</div>
@endsection
@push('scripts')
<script>
        CKEDITOR.replace('body');
    </script>
@endpush