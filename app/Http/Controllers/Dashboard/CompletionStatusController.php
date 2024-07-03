<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompletionStatus;

class CompletionStatusController extends Controller
{
    //
    public function index(){
        $completionStatuses = CompletionStatus::paginate(10);
        return view('dashboard.completion-status.index',compact('completionStatuses'));
    }  

    public function create()
    {
        return view('dashboard.completion-status.create');
    }
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'status' => 'required|string',
        ]);
        
        $completionStatus = CompletionStatus::create([
            'status' => $request->status,  
    ]);
        
      
        return redirect()->route('dashboard.completion.status.index')
                        ->with('success','Completion status created successfully');
    }
    public function show($id)
    {
        $completionStatus = CompletionStatus::find($id);
       
        return view('dashboard.completion-status.show',compact('completionStatus'));
    }
    public function edit($id)
    {
        $completionStatus = CompletionStatus::find($id);
       
        return view('dashboard.completion-status.edit',compact('completionStatus'));
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
            'status' => 'required|string',
        ]);
        $completionStatus = CompletionStatus::find($id);
    
        $completionStatus->status = $request->status;
        $completionStatus->save();
     
        return redirect()->route('dashboard.completion.status.index')
                        ->with('success','Completion status updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("completion_statuses")->where('id',$id)->delete();
        return redirect()->route('dashboard.completion.status.index')
                        ->with('success','Completion status deleted successfully');
    }
}
