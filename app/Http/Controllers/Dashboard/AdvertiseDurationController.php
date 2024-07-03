<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvertiseDuration;

class AdvertiseDurationController extends Controller
{
    public function index(){
        $advertiseDurations = AdvertiseDuration::paginate(10);
        return view('dashboard.advertise-durations.index',compact('advertiseDurations'));
    }  

    public function create()
    {
        return view('dashboard.advertise-durations.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'duration' => 'required|string',
        ]);
       
        $advertiseDuration = AdvertiseDuration::create([
            'duration' => $request->duration,  
    ]);
        
      
        return redirect()->route('dashboard.advertise.duration.index')
                        ->with('success','Advertise duration created successfully');
    }
    public function show($id)
    {
        $advertiseDuration = AdvertiseDuration::find($id);
       
        return view('dashboard.advertise-durations.show',compact('advertiseDuration'));
    }
    public function edit($id)
    {
        $advertiseDuration = AdvertiseDuration::find($id);
       
        return view('dashboard.advertise-durations.edit',compact('advertiseDuration'));
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
            'duration' => 'required|string',
        ]);
        $advertiseDuration = AdvertiseDuration::find($id);
        
        $advertiseDuration->duration = $request->duration;
        $advertiseDuration->save();
     
        return redirect()->route('dashboard.advertise.duration.index')
                        ->with('success','Advertise duration updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("advertise_durations")->where('id',$id)->delete();
        return redirect()->route('dashboard.advertise.duration.index')
                        ->with('success','Advertise duration deleted successfully');
    }
}
