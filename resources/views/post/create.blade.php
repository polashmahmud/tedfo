@extends('layouts.app')

@section('title', 'Post')

@section('page-title', 'Post')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New Post</h3>
                <div class="card-options">
                    <a href="{{ route('post.index') }}" class="btn btn-primary"><i class="fe fe-arrow-left"></i>
                        Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Post Title<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Post Content<span class="form-required">*</span></label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Feature Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Upload Feature Image</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Published Time<span class="form-required">*</span></label>
                            <input type="text" name="created_at" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Categori<span class="form-required">*</span></label>
                            <input type="text" name="categori[]" class="form-control">
                        </div>
                        <div class="form-group mb-0 mt-5">
                            <button type="submit" class="btn btn-primary btn-block">Add New Post</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
