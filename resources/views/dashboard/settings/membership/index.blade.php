@extends('layouts.dashboard.app')
@section('content')
<div class="app-content-header"> <!--begin::Container-->
<div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">MemberShip Settings</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                MemberShip Settings
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
                                    <div class="card-title">MemberShip Settings</div>
                                </div> <!--end::Header--> <!--begin::Form-->
                                <form method="post" action="#" enctype="multipart/form-data"> <!--begin::Body-->
                                @csrf  
                                <div class="card-body">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title One</label>
                                         <input type="text" class="form-control" id="title_one" name="title_one" placeholder="Title One">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_one_ar" name="title_one_ar" placeholder="Title One Arabic">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_two" name="title_two" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_two_ar" name="title_two_ar" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_one" name="paragraph_one" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_one_ar" name="paragraph_one_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_three" name="title_three" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_three_ar" name="title_three_ar" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_four" name="title_four" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_four_ar" name="title_four_ar" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sp_title" name="sp_title" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sp_title_ar" name="sp_title_ar" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sp_price" name="sp_price" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="sp_description" name="sp_description" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="sp_description_ar" name="sp_description_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="bp_title" name="bp_title" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="bp_title_ar" name="bp_title_ar" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="bp_price" name="bp_price" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="bp_description" name="bp_description" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="bp_description_ar" name="bp_description_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="pp_title" name="pp_title" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="pp_title_ar" name="pp_title_ar" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="pp_price" name="pp_price" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="pp_description" name="pp_description" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="pp_description_ar" name="pp_description_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="btn_text" name="btn_text" placeholder="Title Two">  
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="btn_text_ar" name="btn_text_ar" placeholder="Title Two">  
                                        </div>
                                        
                                       
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
        CKEDITOR.replace('paragraph_one');
        CKEDITOR.replace('paragraph_one_ar');
        CKEDITOR.replace('sp_description');
        CKEDITOR.replace('sp_description_ar');
        CKEDITOR.replace('bp_description');
        CKEDITOR.replace('bp_description_ar');
        CKEDITOR.replace('pp_description');
        CKEDITOR.replace('pp_description_ar');
        CKEDITOR.replace('body');
    </script>
@endpush