<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Furnishing;

class FurnishingController extends Controller
{
    //
    public function index(){
        $furnishingTypes = Furnishing::paginate(10);
        return view('dashboard.furnishing-types.index',compact('furnishingTypes'));
    }  

    public function create()
    {
        return view('dashboard.furnishing-types.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'type' => 'required|string',
        ]);
      
        $furnishing = Furnishing::create([
            'type' => $request->type,
    ]);
        
      
        return redirect()->route('dashboard.furnishing.types.index')
                        ->with('success','Furnishing type created successfully');
    }
    public function show($id)
    {
        $furnishing = Furnishing::find($id);
       
        return view('dashboard.furnishing-types.show',compact('furnishing'));
    }
    public function edit($id)
    {
        $furnishing = Furnishing::find($id);
       
        return view('dashboard.furnishing-types.edit',compact('furnishing'));
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
            'type' => 'required|string',
        ]);
        $furnishing = Furnishing::find($id);
        $furnishing->type = $request->type;
        $furnishing->save();
     
        return redirect()->route('dashboard.furnishing.types.index')
                        ->with('success','Furnishing type updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("furnishings")->where('id',$id)->delete();
        return redirect()->route('dashboard.furnishing.types.index')
                        ->with('success','Furnishing type deleted successfully');
    }
}
