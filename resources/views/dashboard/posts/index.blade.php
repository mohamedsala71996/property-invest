@extends('layouts.dashboard.app')
@section('content') 
<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">All Posts</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                All Posts
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>
            <div class="app-content">
                <div class="container-fluid">
                <div class="row">
                    @php $duration = ['1 month','2 month','3 month','4 month','5 month','6 month','7 month',
                                      '8 month','9 month','10 month','11 month','1 year'];@endphp
                <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">All Posts</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Post Duration</th>
                                                <th>Price</th>
                                                <th>For Rent/Sell</th>
                                                <th>(Rent/Sell) Price</th>
                                                <th>Payment System</th>
                                                <th>Contact Information</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($posts as $post)
                                            <tr class="align-middle">
                                                <td>{{$post->id}}</td>
                                                <td>{{$duration[$post->duration]}}</td>
                                                <td>{{$post->duration_price}}</td>
                                                <td>
                                                   {{$post->rent_sell}}
                                                </td>
                                                <td>
                                                   {{$post->price}}
                                                </td>
                                                <td>
                                                   {{$post->cash_installment}}
                                                </td>
                                                <td>
                        <!-- Nested table within a cell -->
                        <table class="table nested-table">
                            <tr>
                                <td> {{$post->name}}</td>
                                <td> {{$post->email}}</td>
                                <td> {{$post->phone}}</td>
                            </tr>
                        </table>
                    </td>
                                                <td> 
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                        <a class="btn btn-outline-info box-shadow-3" href="{{ route('dashboard.posts.show', $post->id) }}">Show</a>
                          
                                <form action="{{route('dashboard.posts.destroy',$post->id)}}" method="POST" style="display: inline-block;">
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
</div>
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-end">
                                        @if(count($posts))
                                       {{$posts->links()}}
                                       @endif
                                    </ul>
                                </div>
                            </div> <!-- /.card -->
           
                        </div>
                </div>

</div>
            
        </div>
@endsection