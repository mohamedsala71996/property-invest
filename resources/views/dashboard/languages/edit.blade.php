@extends('layouts.dashboard.app')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Edit Language</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Language</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('languages.update', $language->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="language_ar">Language (Arabic)</label>
                            <input type="text" id="language_ar" name="language_ar" class="form-control @error('language_ar') is-invalid @enderror" value="{{ old('language_ar', $language->language_ar) }}" required>
                            @error('language_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="language_en">Language (English)</label>
                            <input type="text" id="language_en" name="language_en" class="form-control @error('language_en') is-invalid @enderror" value="{{ old('language_en', $language->language_en) }}" required>
                            @error('language_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary m-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
