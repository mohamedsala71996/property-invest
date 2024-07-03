<?php

namespace App\Http\Controllers\Dashboard; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VirtualViewings;

class VirtualViewingsController extends Controller
{
    //
    public function index(){
        $virtualViewings = VirtualViewings::paginate(10);
        return view('dashboard.virtual-viewings.index',compact('virtualViewings'));
    }  

    public function create()
    {
        return view('dashboard.virtual-viewings.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'type' => 'required|string',
        ]);
        $virtualViewing = VirtualViewings::create([
            'type' => $request->type,     
    ]);
        
      
        return redirect()->route('dashboard.virtual.viewings.index')
                        ->with('success','Virtual viewing created successfully');
    }
    public function show($id)
    {
        $virtualViewing = VirtualViewings::find($id);
       
        return view('dashboard.virtual-viewings.show',compact('virtualViewing'));
    }
    public function edit($id)
    {
        $virtualViewing = VirtualViewings::find($id);
       
        return view('dashboard.virtual-viewings.edit',compact('virtualViewing'));
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
        $virtualViewing = VirtualViewings::find($id);

        $virtualViewing->type = $request->type;
        $virtualViewing->save();
     
        return redirect()->route('dashboard.virtual.viewings.index')
                        ->with('success','Virtual viewing updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("virtual_viewings")->where('id',$id)->delete();
        return redirect()->route('dashboard.virtual.viewings.index')
                        ->with('success','Virtual viewing deleted successfully');
    }
}
