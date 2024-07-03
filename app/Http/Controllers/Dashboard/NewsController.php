<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

// use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    use UploadTrait;

    public function index(){
        $news = News::paginate(10);
        return view('dashboard.news.index',compact('news'));
    }  

    public function create()
    {
        return view('dashboard.news.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'subject' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string',
            'new_date' => 'required',
            'image' => 'required',
        ]);
        $file_name =null;
         if ($request->hasFile('image')) {
            $file_name = $this->saveImage($request->file('image'), 'images/dashboard/news');
         }
        $new = News::create([
            'subject' => $request->subject,
            'title' => $request->title,
            'body' => $request->body,
            'new_date' => $request->new_date,
            'image' => $file_name,     
    ]);
        
      
        return redirect()->route('dashboard.news.index')
                        ->with('success','New created successfully');
    }
    public function show($id)
    {
        $new = News::find($id);
       
        return view('dashboard.news.show',compact('new'));
    }
    public function edit($id)
    {
        $new = News::find($id);
       
        return view('dashboard.news.edit',compact('new'));
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
            'subject' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string',
            'new_date' => 'required',
        ]);
        $new = News::find($id);
        $file_name =null;
         if ($request->hasFile('image')) {
            $file_name = $this->saveImage($request->file('image'), 'images/dashboard/news');
         }
         else
         { 
            $file_name = $new->image;

         }
    
        $new->subject = $request->subject;
        $new->title = $request->title;
        $new->body = $request->body;
        $new->new_date = $request->new_date;
        $new->image = $file_name;
        $new->save();
     
        return redirect()->route('dashboard.news.index')
                        ->with('success','New updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("news")->where('id',$id)->delete();
        return redirect()->route('dashboard.news.index')
                        ->with('success','New deleted successfully');
    }
} 