<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostAdvertise;
use App\Models\PostAdvertiseImages;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

// use Illuminate\Support\Facades\Auth;

class PostAdvertiseController extends Controller
{
    use UploadTrait;

    public function index(){
        $posts = PostAdvertise::paginate(10);
        return view('dashboard.posts.index',compact('posts'));
    }  

    
    public function show($id)
    {
        $post = PostAdvertise::find($id);
        $postImages = PostAdvertiseImages::where('post_id',$id)->get();
       
        return view('dashboard.posts.show',compact('post','postImages'));
    }
    // public function edit($id)
    // {
    //     $new = News::find($id);
       
    //     return view('dashboard.news.edit',compact('new'));
    // }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'subject' => 'required|string',
    //         'title' => 'required|string',
    //         'body' => 'required|string',
    //         'new_date' => 'required',
    //     ]);
    //     $new = News::find($id);
    //     $file_name =null;
    //      if ($request->hasFile('image')) {
    //         $file_name = $this->saveImage($request->file('image'), 'images/dashboard/news');
    //      }
    //      else
    //      { 
    //         $file_name = $new->image;

    //      }
    
    //     $new->subject = $request->subject;
    //     $new->title = $request->title;
    //     $new->body = $request->body;
    //     $new->new_date = $request->new_date;
    //     $new->image = $file_name;
    //     $new->save();
     
    //     return redirect()->route('dashboard.news.index')
    //                     ->with('success','New updated successfully');
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("post_advertise_images")->where('post_id',$id)->delete();
        DB::table("post_advertises")->where('id',$id)->delete();
        
        return redirect()->route('dashboard.posts.index')
                        ->with('success','Post deleted successfully');
    }
    public function postSettings()
    {
        return view('dashboard.post-settings.index');
    }
} 