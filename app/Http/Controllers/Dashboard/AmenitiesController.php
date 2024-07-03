<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    //
    public function index(){
        $amenities = Amenities::paginate(10);
        return view('dashboard.amenities.index',compact('amenities'));
    }  

    public function create()
    {
        return view('dashboard.amenities.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required|string',
        ]);
       
        $amenity = Amenities::create([
            'name' => $request->name,
    ]);
        
      
        return redirect()->route('dashboard.amenities.index')
                        ->with('success','Amenity created successfully');
    }
    public function show($id)
    {
        $amenity = Amenities::find($id);
       
        return view('dashboard.amenities.show',compact('amenity'));
    }
    public function edit($id)
    {
        $amenity = Amenities::find($id);
       
        return view('dashboard.amenities.edit',compact('amenity'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $amenity = Amenities::find($id);
       
        $amenity->name = $request->name;
        $amenity->save();
     
        return redirect()->route('dashboard.amenities.index')
                        ->with('success','Amenity updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("amenities")->where('id',$id)->delete();
        return redirect()->route('dashboard.amenities.index')
                        ->with('success','Amenity deleted successfully');
    }
}
