<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberShip;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

// use Illuminate\Support\Facades\Auth;

class MemberShipController extends Controller
{
    use UploadTrait;

    public function index()
    {
    //return view('dashboard.users.create');
    //$memberShipSettings = MemberShip::firstOrFail(); //, compact('memberShipSettings')
    return view('dashboard.settings.membership.index');
    }

    public function update(Request $request)
    {
        $memberShipSettings = MemberShip::firstOrFail(); 
        $memberShipSettings->update($request->all());
        return redirect()->route('settings.membership.index')->with('success', 'Saved Successfully');
    }
   
    
} 