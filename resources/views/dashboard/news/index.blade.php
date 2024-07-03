@extends('layouts.dashboard.app')
@section('content') 
<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">All News</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                All News
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>
            <div class="app-content">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">All News</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Subject</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>New Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($news as $new)
                                            <tr class="align-middle">
                                                <td>{{$new->subject}}</td>
                                                <td>{{$new->title}}</td>
                                                <td>
                                                   {{$new->new_date}}
                                                </td>
                                                <td>
                                                   {{$new->body}}
                                                </td>
                                                <td>
                                                    <img src="/images/dashboard/news/{{$new->image}}" width="100px" height="100px" alt=""/>
                                                </td>
                                                <td> 
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{ route('dashboard.news.edit', $new->id) }}" class="btn btn-outline-primary box-shadow-3">Edit</a>
                          
                                <form action="{{route('dashboard.news.destroy',$new->id)}}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger box-shadow-3">Delete</button>
                                </form>
                            
                        </div>
                    </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        @if(count($news))
                                       {{$news->links()}}
                                       @endif
                                    </ul>
                                </div>
                            </div> <!-- /.card -->
           
                        </div>
                </div>

</div>
            
        </div>
@endsection