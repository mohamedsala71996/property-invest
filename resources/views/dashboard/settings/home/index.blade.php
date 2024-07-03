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
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_two" name="title_two" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_two_ar" name="title_two_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_one" name="paragraph_one" aria-label="With textarea"></textarea>  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_one_ar" name="paragraph_one_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="btn_one_txt" name="btn_one_txt" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="btn_one_txt_ar" name="btn_one_txt_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_three" name="title_three" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_three_ar" name="title_three_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_no_one" name="sub_title_no_one" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_no_one_ar" name="sub_title_no_one_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_four" name="title_four" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_four_ar" name="title_four_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_one" name="sub_title_one" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_one_ar" name="sub_title_one_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_two" name="sub_title_two" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_two_ar" name="sub_title_two_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_three" name="sub_title_three" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_three_ar" name="sub_title_three_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_four" name="sub_title_four" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_four_ar" name="sub_title_four_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_five" name="sub_title_five" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_five_ar" name="sub_title_five_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_six" name="sub_title_six" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_six_ar" name="sub_title_six_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_two" name="paragraph_two" aria-label="With textarea"></textarea>  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_two_ar" name="paragraph_two_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_no_two" name="sub_title_no_two" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_no_two_ar" name="sub_title_no_two_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="location" name="location" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="location_ar" name="location_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="rent" name="rent" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="rent_ar" name="rent_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="property_type" name="property_type" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="property_type_ar" name="property_type_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="beds" name="beds" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="beds_ar" name="beds_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="baths" name="baths" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="baths_ar" name="baths_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="price" name="price" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="price_ar" name="price_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="more_filters" name="more_filters" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="more_filters_ar" name="more_filters_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="find" name="find" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="find_ar" name="find_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="featured_properties" name="featured_properties" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="featured_properties_ar" name="featured_properties_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_five" name="title_five" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_five_ar" name="title_five_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="contact" name="contact" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="contact_ar" name="contact_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="btn_th_d_view" name="btn_th_d_view" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="btn_th_d_view_ar" name="btn_th_d_view_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="see_more" name="see_more" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="see_more_ar" name="see_more_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="why_choose" name="why_choose" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="why_choose_ar" name="why_choose_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_six" name="title_six" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_six_ar" name="title_six_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_seven" name="sub_title_seven" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="sub_title_seven_ar" name="sub_title_seven_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_seven" name="title_seven" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_seven_ar" name="title_seven_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_three" name="paragraph_three" aria-label="With textarea"></textarea>  
                                        </div> 
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_three_ar" name="paragraph_three_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_eight" name="title_eight" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_eight_ar" name="title_eight_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_four" name="paragraph_four" aria-label="With textarea"></textarea>  
                                        </div> 
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_four_ar" name="paragraph_four_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_five" name="paragraph_five" aria-label="With textarea"></textarea>  
                                        </div> 
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_five_ar" name="paragraph_five_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_nine" name="title_nine" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_nine_ar" name="title_nine_ar" placeholder="Title Two">  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_six" name="paragraph_six" aria-label="With textarea"></textarea>  
                                        </div> 
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Paragraph One</label>
                                        <textarea class="form-control" id="paragraph_six_ar" name="paragraph_six_ar" aria-label="With textarea"></textarea>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_ten" name="title_ten" placeholder="Title Two">  
                                        </div>
                                         </div>
                                         <div class="col-md-6">
                                        <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Title</label>
                                         <input type="text" class="form-control" id="title_ten_ar" name="title_ten_ar" placeholder="Title Two">  
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