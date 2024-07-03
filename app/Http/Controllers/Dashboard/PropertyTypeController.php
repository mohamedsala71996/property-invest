<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{
    //
    public function index(){
        $propertyTypes = PropertyType::paginate(10);
        return view('dashboard.property-types.index',compact('propertyTypes'));
    }  

    public function create()
    {
        return view('dashboard.property-types.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'type' => 'required|string',
        ]);
    
        $propertyType = PropertyType::create([
            'type' => $request->type,
    ]);
        
      
        return redirect()->route('dashboard.property.types.index')
                        ->with('success','Property type created successfully');
    }
    public function show($id)
    {
        $propertyType = PropertyType::find($id);
       
        return view('dashboard.property-types.show',compact('propertyType'));
    }
    public function edit($id)
    {
        $propertyType = PropertyType::find($id);
       
        return view('dashboard.property-types.edit',compact('propertyType'));
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
        $propertyType = PropertyType::find($id);
        $propertyType->type = $request->type;
        $propertyType->save();
     
        return redirect()->route('dashboard.property.types.index')
                        ->with('success','property type updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("property_types")->where('id',$id)->delete();
        return redirect()->route('dashboard.property.type.index')
                        ->with('success','Property type deleted successfully');
    }
}
