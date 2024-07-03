<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostAdvertise;
use App\Models\PostAdvertiseImages;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Auth;

class PostAdvertiseController extends Controller
{
    

    // public function index(){
    //     return view('dashboard.news.index');
    // }

    public function create()
    {
        return view('webSite.services.post-advertise');
    }
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'duration' => 'required|integer',
            'duration_price' => 'required|numeric',
            'new_resell' => 'required|in:new,resell',
            'rent_sell' => 'required|in:rent,sell',
            'price' => 'required|numeric',
            'cash_installment' => 'required|in:cash,installment',
            'advance_payment'=>'nullable|numeric',
            'remaining_amount'=>'nullable|numeric',
            'installment_duration'=>'nullable|integer',
            'total_amount' => 'required|numeric',
            'property_type' => 'required|integer',
            'property_size' => 'required|numeric',
            'location' => 'required|string',
            'bedrooms_no' => 'required|integer',
            'Bathrooms_no' => 'required|integer',
            'floors_no' => 'required|integer',
            'Construction_year' => 'required|string',
            'furnishing' => 'nullable|integer',
            'completion_status' => 'nullable|integer',
            'amenities.*' => 'nullable|integer',
            'virtual_viewings' => 'nullable|integer',
            'logo' => 'nullable',
            'developer_name' => 'nullable|string',
            'delivery_date' => 'nullable|string',
            'files.*'=>'required',
            'th_d_image_path' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $postAd = new PostAdvertise();
        $postAd->duration = $request->duration;
        $postAd->duration_price = $request->duration_price;
        $postAd->new_resell = $request->new_resell;
        $postAd->rent_sell = $request->rent_sell;
        $postAd->price = $request->price;
        $postAd->cash_installment = $request->cash_installment;
        $postAd->advance_payment = $request->advance_payment;
        $postAd->remaining_amount = $request->remaining_amount;
        $postAd->installment_duration = $request->installment_duration;
        $postAd->total_amount = $request->total_amount;
        $postAd->property_type = $request->property_type;
        $postAd->property_size = $request->property_size;
        $postAd->location = $request->location;
        $postAd->bedrooms_no = $request->bedrooms_no;
        $postAd->Bathrooms_no = $request->Bathrooms_no;
        $postAd->floors_no = $request->floors_no;
        $postAd->Construction_year = $request->Construction_year;
        $postAd->furnishing = $request->furnishing;
        $postAd->completion_status = $request->completion_status;
        $postAd->virtual_viewings = $request->virtual_viewings;
        $logoName = null;
        if($request->hasFile('logo'))
        {
            $destinationPath = public_path().'/images/post-images/logos' ;
            $logoName = time().'.'.$request->logo->extension();  
            $request->logo->move($destinationPath, $logoName);
        }
        $postAd->logo = $logoName;
        $postAd->developer_name = $request->developer_name;
        $postAd->delivery_date = $request->delivery_date;
        $postAd->th_d_image_path = $request->th_d_image_path;
        $postAd->name = $request->name;
        $postAd->email = $request->email;
        $postAd->phone = $request->phone;
        $postAd->latitude = $request->latitude;
        $postAd->longitude = $request->longitude;
        $postAd->title = $request->title;
        $postAd->description = $request->description;
        $postAd->save();
        if($request->hasFile('files'))
        {
            $destinationPath = public_path().'/images/post-images' ;
            foreach ($request->file('files') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move($destinationPath, $imageName);

                // Save image details to database
                PostAdvertiseImages::create(['post_advertise_id' => $postAd->id,'image_path'=>$imageName]);
            } 
        }
         if(count($request->amenities) > 1)
        {
            foreach($request->amenities as $amenity)
            {
                DB::table('property_amenities')->insert([
                    'post_advertise_id' => $postAd->id,
                    'amenities'=>$amenity
                ]);
            }
        }
        else
        {
             DB::table('property_amenities')->insert([
                    'post_advertise_id' => $postAd->id,
                    'amenities'=>$request->amenities
                ]);
        }
        // Redirect back with a success message
        return redirect()->back()->with('success', 'تم حفظ الاعلان بنجاح');
    }
    // public function show($id)
    // {
    //     $new = News::find($id);
       
    //     return view('dashboard.news.show',compact('new'));
    // }
    // public function edit($id)
    // {
    //     $new = News::find($id);
       
    //     return view('dashboard.news.edit',compact('new'));
    // }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'subject' => 'required|string',
    //         'title' => 'required|string',
    //         'body' => 'required|string',
    //         'new_date' => 'required',
    //     ]);
    //     $new = News::find($id);
    //     $file_name =null;
    //      if ($request->hasFile('image')) {
    //         $file_name = $this->saveImage($request->file('photo'), 'images/dashboard/news');
    //      }
    //      else
    //      {
    //         $file_name = $new->image;

    //      }
    
    //     $new->subject = $request->subject;
    //     $new->title = $request->title;
    //     $new->body = $request->body;
    //     $new->new_date = $request->new_date;
    //     $new->image = $file_name;
    //     $new->save();
    
    //     return redirect()->route('news.index')
    //                     ->with('success','New updated successfully');
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     DB::table("news")->where('id',$id)->delete();
    //     return redirect()->route('news.index')
    //                     ->with('success','New deleted successfully');
    // }
}