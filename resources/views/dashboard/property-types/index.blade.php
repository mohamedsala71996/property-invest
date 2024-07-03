@extends('layouts.dashboard.app')
@section('content') 
<div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                <div class="col-md-9"></div>
<div class="col-md-9"><a href="{{route('dashboard.property.types.create')}}" class="btn btn-info">Add</a></div></div>
 
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Property Types</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Property Types
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
                                    <h3 class="card-title">Property Types</h3>
                                </div> <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>English Type</th>
                                                <th>Arabic Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($propertyTypes as $propertyType)
                                            <tr class="align-middle">
                                                <td>{{$propertyType->type}}</td>
                                                <td>{{$propertyType->type_ar}}</td>
                                                <td> 
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="{{ route('dashboard.property.types.edit', $propertyType->id) }}" class="btn btn-outline-primary box-shadow-3">Edit</a>
                          
                                <form action="{{route('dashboard.property.types.destroy',$propertyType->id)}}" method="POST" style="display: inline-block;">
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
                                        @if(count($propertyTypes))
                                       {{$propertyTypes->links()}}
                                       @endif
                                    </ul>
                                </div>
                            </div> <!-- /.card -->
           
                        </div>
                </div>

</div>
            
        </div>
@endsection