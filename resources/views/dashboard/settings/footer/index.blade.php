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
                                    <div class="row">
                                     <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title One</label>
                                         <input type="text" class="form-control" id="title_one" name="title_one" placeholder="Title One">  
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_one_ar" name="title_one_ar" placeholder="Title One Arabic">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="description" name="description" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="description_ar" name="description_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Site Logo</label>
                                         <input type="file" class="form-control"  name="logo" />  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="instgram_link" name="instgram_link" placeholder="Title Two">  
                                        </div>
                                        </div>
                                         </div>
                                         <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="youtube_link" name="youtube_link" placeholder="Title Two">  
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="email_text_label" name="email_text_label" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="subscribe_btn_text" name="subscribe_btn_text" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_one_name" name="page_one_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_one_name_ar" name="page_one_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_one_link" name="page_one_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_two_name" name="page_two_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_two_name_ar" name="page_two_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_two_link" name="page_two_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_three_name" name="page_three_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_three_name_ar" name="page_three_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_three_link" name="page_three_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_four_name" name="page_four_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_four_name_ar" name="page_four_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_four_link" name="page_four_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_five_name" name="page_five_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_five_name_ar" name="page_five_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_five_link" name="page_five_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_six_name" name="page_six_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_six_name_ar" name="page_six_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_six_link" name="page_six_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_seven_name" name="page_seven_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_seven_name_ar" name="page_seven_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_seven_link" name="page_seven_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eight_name" name="page_eight_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eight_name_ar" name="page_eight_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eight_link" name="page_eight_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_nine_name" name="page_nine_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_nine_name_ar" name="page_nine_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_nine_link" name="page_nine_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_ten_name" name="page_ten_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_ten_name_ar" name="page_ten_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_ten_link" name="page_ten_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eleven_name" name="page_eleven_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eleven_name_ar" name="page_eleven_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eleven_link" name="page_eleven_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_tweleve_name" name="page_tweleve_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_tweleve_name_ar" name="page_tweleve_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_tweleve_link" name="page_tweleve_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_thrteen_name" name="page_thrteen_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_thrteen_name_ar" name="page_thrteen_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_thrteen_link" name="page_thrteen_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_fourteen_name" name="page_fourteen_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_fourteen_name_ar" name="page_fourteen_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_fourteen_link" name="page_fourteen_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_fifteen_name" name="page_fifteen_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_fifteen_name_ar" name="page_fifteen_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_fifteen_link" name="page_fifteen_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_sixteen_name" name="page_sixteen_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_sixteen_name_ar" name="page_sixteen_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_sixteen_link" name="page_sixteen_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_seventeen_name" name="page_seventeen_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_seventeen_name_ar" name="page_seventeen_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_seventeen_link" name="page_seventeen_link" placeholder="Title Two">  
                                        </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4"> 
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eighteen_name" name="page_eighteen_name" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eighteen_name_ar" name="page_eighteen_name_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="page_eighteen_link" name="page_eighteen_link" placeholder="Title Two">  
                                        </div>
                                         </div>
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