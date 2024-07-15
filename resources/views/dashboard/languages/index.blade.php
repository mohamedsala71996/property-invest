@extends('layouts.dashboard.app')

@section('content') 
<div class="app-content-header"> 
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Languages</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Languages</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="app-content">
    <div class="container-fluid">
        <div class="col-md-9"></div>
        {{-- <div class="col-md-9"><a href="{{ route('languages.create') }}" class="btn btn-success">Add Language</a></div> --}}
        <br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Languages</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Arabic Language</th>
                                <th>English Language</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($languages as $language)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $language->language_ar }}</td>
                                <td>{{ $language->language_en }}</td>
                                <td> 
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('languages.edit', $language->id) }}" class="btn btn-outline-primary box-shadow-3">Edit</a>
                                        <form action="{{ route('languages.destroy', $language->id) }}" method="POST" style="display: inline-block;">
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
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        @if(count($languages))
                           {{ $languages->links() }}
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
