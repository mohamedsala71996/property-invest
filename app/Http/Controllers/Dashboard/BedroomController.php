<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bedroom;

class BedroomController extends Controller
{
    //
    public function index(){
        $bedrooms = Bedroom::paginate(10);
        return view('dashboard.bedrooms.index',compact('bedrooms'));
    }  

    public function create()
    {
        return view('dashboard.bedrooms.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'bedrooms_no' => 'required|string',
        ]);

        $bedroom = Bedroom::create([
            'bedrooms_no' => $request->bedrooms_no,  
    ]);
        
      
        return redirect()->route('dashboard.bedrooms.index')
                        ->with('success','Bedroom created successfully');
    }
    public function show($id)
    {
        $bedroom = Bedroom::find($id);
       
        return view('dashboard.bedrooms.show',compact('bedroom'));
    }
    public function edit($id)
    {
        $bedroom = Bedroom::find($id);
       
        return view('dashboard.bedrooms.edit',compact('bedroom'));
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
            'bedrooms_no' => 'required|string',
        ]);
        $bedroom = Bedroom::find($id);
        $bedroom->bedrooms_no = $request->bedrooms_no;
        $bedroom->save();
     
        return redirect()->route('dashboard.bedrooms.index')
                        ->with('success','Bedroom updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("bedrooms")->where('id',$id)->delete();
        return redirect()->route('dashboard.bedrooms.index')
                        ->with('success','Bedroom deleted successfully');
    }
}
