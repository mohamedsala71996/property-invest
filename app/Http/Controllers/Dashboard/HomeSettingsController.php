<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

// use Illuminate\Support\Facades\Auth;

class HomeSettingsController extends Controller
{
    use UploadTrait;

    public function index()
    {
    //return view('dashboard.users.create');
    //$settings = HomeSetting::firstOrFail();//, compact('settings') 
    return view('dashboard.settings.home.index');
    }

    public function update(Request $request)
    {
        $settings = HomeSetting::firstOrFail(); 
        $settings->update($request->all());
        return redirect()->route('settings.index')->with('success', 'تم حفظ الإعدادات بنجاح.');
    }

  
    public function store(Request $request)
    {
        // return $request;
    //     $this->validate($request, [
    //         'subject' => 'required|string',
    //         'title' => 'required|string',
    //         'body' => 'required|string',
    //         'new_date' => 'required',
    //         'image' => 'required',
    //     ]);
    //     $file_name =null;
    //      if ($request->hasFile('image')) {
    //         $file_name = $this->saveImage($request->file('image'), 'images/dashboard/news');
    //      }
    //     $new = News::create([
    //         'subject' => $request->subject,
    //         'title' => $request->title,
    //         'body' => $request->body,
    //         'new_date' => $request->new_date,
    //         'image' => $file_name,     
    // ]);
        
      
    //     return redirect()->route('dashboard.news.index')
    //                     ->with('success','New created successfully');
    }
   
    
} 