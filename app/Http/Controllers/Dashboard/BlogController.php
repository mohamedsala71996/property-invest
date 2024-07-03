<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

// use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    use UploadTrait;

    public function index(){
        $blogs = Blog::paginate(10);
        return view('dashboard.blogs.index',compact('blogs'));
    }  

    public function create()
    {
        return view('dashboard.news.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'title' => 'required|string',
            'title_ar' => 'required|string',
            'body' => 'required|string',
            'body_ar' => 'required',
            'image' => 'required',
        ]);
        $file_name =null;
         if ($request->hasFile('image')) {
            $file_name = $this->saveImage($request->file('image'), 'images/dashboard/blogs');
         }
        $blog = Blog::create([
            'title' => $request->subject,
            'title_ar' => $request->title,
            'body' => $request->body,
            'body_ar' => $request->new_date,
            'image' => $file_name,     
    ]);
        
      
        return redirect()->route('dashboard.blogs.index')
                        ->with('success','Blog created successfully');
    }
    public function show($id)
    {
        $blog = Blog::find($id);
       
        return view('dashboard.blogs.show',compact('blog'));
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
       
        return view('dashboard.blogs.edit',compact('blog'));
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
            'title' => 'required|string',
            'title_ar' => 'required|string',
            'body' => 'required|string',
            'body_ar' => 'required',
        ]);
        $blog = Blog::find($id);
        $file_name =null;
         if ($request->hasFile('image')) {
            $file_name = $this->saveImage($request->file('image'), 'images/dashboard/blogs');
         }
         else
         { 
            $file_name = $blog->image;

         }
    
        $blog->title = $request->title;
        $blog->title_ar = $request->title_ar;
        $blog->body = $request->body;
        $blog->body_ar = $request->body_ar;
        $blog->image = $file_name;
        $blog->save();
     
        return redirect()->route('dashboard.blogs.index')
                        ->with('success','Blog updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("blogs")->where('id',$id)->delete();
        return redirect()->route('dashboard.blogs.index')
                        ->with('success','Blog deleted successfully');
    }
} 