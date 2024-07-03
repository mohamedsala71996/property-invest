<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    //
    public function index(){
        $countries = Country::paginate(10);
        return view('dashboard.countries.index',compact('countries'));
    }  

    public function create()
    {
        return view('dashboard.countries.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        
        $country = Country::create([
            'name' => $request->name,
    ]);
        
      
        return redirect()->route('dashboard.countries.index')
                        ->with('success','Country created successfully');
    }
    public function show($id)
    {
        $country = Country::find($id);
       
        return view('dashboard.countries.show',compact('country'));
    }
    public function edit($id)
    {
        $country = Country::find($id);
       
        return view('dashboard.countries.edit',compact('country'));
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
        $country = Country::find($id);
        $country->name = $request->name;
        $country->save();
     
        return redirect()->route('dashboard.countries.index')
                        ->with('success','Country updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("countries")->where('id',$id)->delete();
        return redirect()->route('dashboard.countries.index')
                        ->with('success','Country deleted successfully');
    }
}
