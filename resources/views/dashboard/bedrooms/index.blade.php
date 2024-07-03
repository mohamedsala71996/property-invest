@extends('layouts.dashboard.app')
@section('content') 
<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Floors</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Floors
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
                                    <h3 class="card-title">Floors</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Floor No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($floors as $floor)
                                            <tr class="align-middle">
                                                <td>{{$floor->floors_no}}</td>
                                                <td> 
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{ route('dashboard.floors.edit', $floor->id) }}" class="btn btn-outline-primary box-shadow-3">Edit</a>
                          
                                <form action="{{route('dashboard.floors.destroy',$floor->id)}}" method="POST" style="display: inline-block;">
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
                                        @if(count($floors))
                                       {{$floors->links()}}
                                       @endif
                                    </ul>
                                </div>
                            </div> <!-- /.card -->
           
                        </div>
                </div>

</div>
            
        </div>
@endsection
