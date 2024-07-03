<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Floor;

class FloorController extends Controller
{
    //
    public function index(){
        $floors = Floor::paginate(10);
        return view('dashboard.floors.index',compact('floors'));
    }  

    public function create()
    {
        return view('dashboard.floors.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'floors_no' => 'required|string',
        ]);
        
        $floor = Floor::create([
            'floors_no' => $request->floors_no,
    ]);
        
      
        return redirect()->route('dashboard.floors.index')
                        ->with('success','Floor created successfully');
    }
    public function show($id)
    {
        $floor = Floor::find($id);
       
        return view('dashboard.floors.show',compact('floor'));
    }
    public function edit($id)
    {
        $floor = Floor::find($id);
       
        return view('dashboard.floors.edit',compact('floor'));
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
            'floors_no' => 'required|string',
        ]);
        $floor = Floor::find($id);
        $floor->floors_no = $request->floors_no;
        $floor->save();
     
        return redirect()->route('dashboard.floors.index')
                        ->with('success','Floor updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("floors")->where('id',$id)->delete();
        return redirect()->route('dashboard.floors.index')
                        ->with('success','Floor deleted successfully');
    }
}
