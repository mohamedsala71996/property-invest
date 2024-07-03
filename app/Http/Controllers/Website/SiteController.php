<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\PostAdvertise;
use App\Models\PostAdvertiseImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $postAdvertises = PostAdvertise::with('images')->get();
        return view('webSite.index',compact('postAdvertises'));
    }
    public function newLaunches()
    {
        $postAdvertises = PostAdvertise::with('images')->where('new_resell','new')->get();
        return view('webSite.new-launch',compact('postAdvertises'));
    }
    public function getPostedAdvertises(Request $request)
    {
       if($request->ajax())
        {
        $output="";
        $postAdvertises = PostAdvertise::query();
        if($request->has('property_type') && $request->property_type)
        {
            $postAdvertises = $postAdvertises->where('property_type',$request->property_type);
        }
        if($request->has('bedrooms_no') && $request->bedrooms_no)
        {
            $postAdvertises = $postAdvertises->where('bedrooms_no',$request->bedrooms_no);
        }
        if($request->has('Bathrooms_no') && $request->Bathrooms_no)
        {
            $postAdvertises = $postAdvertises->where('Bathrooms_no',$request->Bathrooms_no);
        }
        if($request->has('furnishing') &&  $request->furnishing)
        {
            $postAdvertises = $postAdvertises->where('furnishing',$request->furnishing);
        }
        if($request->has('completion_status') &&  $request->completion_status)
        {
            $postAdvertises = $postAdvertises->where('completion_status',$request->completion_status);
        }
         if($request->has('amenities') &&  $request->amenities)
        {
             $posts_Ids = DB::table('property_amenities')
                ->whereIn('amenities', $request->amenities)
                ->pluck('post_advertise_id')->toArray();
            $postAdvertises = $postAdvertises->whereIn('id',$posts_Ids);
        }
        if($request->has('virtual_viewings') &&  $request->virtual_viewings)
        {
            $postAdvertises = $postAdvertises->where('virtual_viewings',$request->virtual_viewings);
        }
        if($request->has('min_size') &&  $request->min_size && $request->has('max_size') &&  $request->max_size)
        {
            $postAdvertises = $postAdvertises->whereBetween('property_size', [$request->min_size, $request->max_size]);
        }
        $postAdvertises = $postAdvertises->with('images')->get();
        $property_types  = [
            '1'=>'Apartment','2'=>'Villa','3'=>'Townhouse','4'=>'Penthouse','5'=>'Compound','6'=>'Duplex','7'=>'Full Floor','8'=>'Half Floor',
                                     '9'=>'Whole Building','10'=>'Land','11'=>'Bulk Sale Unit','12'=>'Bungalow','13'=>'Hotel & Hotel Apartment'];   
        $bedrooms = ['1'=>'Studio','2'=>'0','3'=>'1','4'=>'2','5'=>'3','6'=>'4','7'=>'5','8'=>'6','9'=>'7','10'=>'+7'];   
        $bathrooms = ['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4','6'=>'5','7'=>'6','8'=>'7','9'=>'+7'];
         if($postAdvertises)
        {
           $output.='<div class="mt-3 row ">';
           foreach($postAdvertises as $postAdvertise)
                {
                $output.='<div class="col-lg-4 col-md-6">'.
                    '<div class=" bg-white mb-3 p-4">';
                       
                              if(count($postAdvertise->images) > 1)
                              {
                               $output.=' <div class="slider-container">'.
                              '<div class="sliderBtn prevBtn"><i class="fas fa-chevron-left"></i></div>
                              <div class="sliderBtn nextBtn"><i class="fas fa-chevron-right"></i></div>
                              <div class="slider">';
                              foreach($postAdvertise->images as $image)
                              {
                             $output.='<div class="slide">';
                                $output.= '<img src="/images/post-images/'.$image->image_path.'" style="height: 200px;" class="img-fluid w-100"  alt="">';
                             $output.= '</div>';
                              }
                             $output.='</div>';
                            $output.= '</div>';
                              }
                             else
                             {
                              $postImage = PostAdvertiseImages::where('post_advertise_id',$postAdvertise->id)->first();
                              if($postImage)
                              {
                               $output.='<img src="/images/post-images/'.$postImage->image_path.'" style="height: 200px;" class="img-fluid w-100" alt="">';
                              }
                             }
                         
                          $output.='<div class="d-flex justify-content-between align-items-center mt-3">
                            <h3 class="fw-bold" style="color:#FFBB50 ;">$';
                            if(is_int($postAdvertise->price) || floatval($postAdvertise->price) == intval($postAdvertise->price))
                            {
                             $output.= intval($postAdvertise->price);
                            }
                            else
                            {
                             $output.=$postAdvertise->price;
                            }
                            $output.='/Mo</h3>
                            <div class="btn hover p-2 px-3 fw-bold" style="background-color:#FFBB50 ;color: #3b3a5e;">Contact</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h5 class="fw-bold mt-3" style="color:#3b3a5e">';
                             $output.= $property_types[$postAdvertise->property_type];
                             $output.= '</h5>
                            <p style="color:#8E8E8E ;"><svg class="svg-inline--fa fa-location-dot" style="color: #FFBB50;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path></svg><!-- <i class="fa-solid fa-location-dot" style="color: #FFBB50;"></i> Font Awesome fontawesome.com -->';
                            $output.=$postAdvertise->location;
                           $output.='</p>
                          </div>
                          <div class="btn btn-danger fw-bold p-2" style="font-size: 18px;">3D View</div>
                        </div>
                        <div class="row">
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-bed border-end pe-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M176 288C220.1 288 256 252.1 256 208S220.1 128 176 128S96 163.9 96 208S131.9 288 176 288zM544 128H304C295.2 128 288 135.2 288 144V320H64V48C64 39.16 56.84 32 48 32h-32C7.163 32 0 39.16 0 48v416C0 472.8 7.163 480 16 480h32C56.84 480 64 472.8 64 464V416h512v48c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16V224C640 170.1 597 128 544 128z"></path></svg><!-- <i class="fa-solid fa-bed border-end pe-1"></i> Font Awesome fontawesome.com -->';
                             $output.= $bedrooms[$postAdvertise->bedrooms_no];
                              $output.= 'Beds</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-bath" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bath" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M32 384c0 28.32 12.49 53.52 32 71.09V496C64 504.8 71.16 512 80 512h32C120.8 512 128 504.8 128 496v-15.1h256V496c0 8.836 7.164 16 16 16h32c8.836 0 16-7.164 16-16v-40.9c19.51-17.57 32-42.77 32-71.09V352H32V384zM496 256H96V77.25C95.97 66.45 111 60.23 118.6 67.88L132.4 81.66C123.6 108.6 129.4 134.5 144.2 153.2C137.9 159.5 137.8 169.8 144 176l11.31 11.31c6.248 6.248 16.38 6.248 22.63 0l105.4-105.4c6.248-6.248 6.248-16.38 0-22.63l-11.31-11.31c-6.248-6.248-16.38-6.248-22.63 0C230.7 33.26 204.7 27.55 177.7 36.41L163.9 22.64C149.5 8.25 129.6 0 109.3 0C66.66 0 32 34.66 32 77.25v178.8L16 256C7.164 256 0 263.2 0 272v32C0 312.8 7.164 320 16 320h480c8.836 0 16-7.164 16-16v-32C512 263.2 504.8 256 496 256z"></path></svg><!-- <i class="fa-solid fa-bath"></i> Font Awesome fontawesome.com -->';
                             $output.= $bathrooms[$postAdvertise->Bathrooms_no];
                              $output.= 'Baths</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-car" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z"></path></svg><!-- <i class="fa-solid fa-car"></i> Font Awesome fontawesome.com --> 1 Parking</div></div>
                            <div class="col-3"><div class="border p-2" style="color: #3b3a5e;font-size:10px ;"><svg class="svg-inline--fa fa-ruler" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ruler" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M177.9 494.1C159.2 512.8 128.8 512.8 110.1 494.1L17.94 401.9C-.8054 383.2-.8054 352.8 17.94 334.1L68.69 283.3L116.7 331.3C122.9 337.6 133.1 337.6 139.3 331.3C145.6 325.1 145.6 314.9 139.3 308.7L91.31 260.7L132.7 219.3L180.7 267.3C186.9 273.6 197.1 273.6 203.3 267.3C209.6 261.1 209.6 250.9 203.3 244.7L155.3 196.7L196.7 155.3L244.7 203.3C250.9 209.6 261.1 209.6 267.3 203.3C273.6 197.1 273.6 186.9 267.3 180.7L219.3 132.7L260.7 91.31L308.7 139.3C314.9 145.6 325.1 145.6 331.3 139.3C337.6 133.1 337.6 122.9 331.3 116.7L283.3 68.69L334.1 17.94C352.8-.8055 383.2-.8055 401.9 17.94L494.1 110.1C512.8 128.8 512.8 159.2 494.1 177.9L177.9 494.1z"></path></svg><!-- <i class="fa-solid fa-ruler"></i> Font Awesome fontawesome.com -->';
                             if(is_int($postAdvertise->property_size) || floatval($postAdvertise->property_size) == intval($postAdvertise->property_size))
                             {
                             $output.= intval($postAdvertise->property_size);
                             }
                             else
                             {
                              $output.= $postAdvertise->property_size;
                             }
                             $output.= 'Sqm</div></div>
                        </div>
                    </div>
                </div>';
                }
                $output.='</div>';
                return Response($output);
        }
    
        }
    }
    public function advertiseDetails($id)
    {
        $postAdvertise = PostAdvertise::with('images')->where('id',$id)->first();
        $property_amenities =  DB::table('property_amenities')->where('post_advertise_id',$id)->get();
        // if(isset($property_amenities))
        // {
        // return view('webSite.services.advertise-details',compact('postAdvertise','property_amenities'));
        // }
         return view('webSite.services.advertise-details',compact('postAdvertise','property_amenities'));
    }
}