<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bathroom;

class BathroomController extends Controller
{
    //
    public function index(){
        $bathrooms = Bathroom::paginate(10);
        return view('dashboard.bathrooms.index',compact('bathrooms'));
    }  

    public function create()
    {
        return view('dashboard.bathrooms.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'bathrooms_no' => 'required|string',
        ]);
       
        $bathroom = Bathroom::create([
            'bathrooms_no' => $request->bathrooms_no,
    ]);
        
      
        return redirect()->route('dashboard.bathrooms.index')
                        ->with('success','Bathroom created successfully');
    }
    public function show($id)
    {
        $bathroom = Bathroom::find($id);
       
        return view('dashboard.bathrooms.show',compact('bathroom'));
    }
    public function edit($id)
    {
        $bathroom = Bathroom::find($id);
       
        return view('dashboard.bathrooms.edit',compact('bathroom'));
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
            'bathrooms_no' => 'required|string',
        ]);
        $bathroom = Bathroom::find($id);
        $bathroom->bathrooms_no = $request->bathrooms_no;
        $bathroom->save();
     
        return redirect()->route('dashboard.bathrooms.index')
                        ->with('success','Bathroom updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("bathrooms")->where('id',$id)->delete();
        return redirect()->route('dashboard.bathrooms.index')
                        ->with('success','Bathroom deleted successfully');
    }
}
