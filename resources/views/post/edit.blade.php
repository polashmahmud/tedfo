@extends('layouts.app')

@section('title', 'Edit Post')

@section('page-title', 'Edit Post')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Post</h3>
                <div class="card-options">
                    <a href="{{ route('post.index') }}" class="btn btn-primary"><i class="fe fe-arrow-left"></i>
                        Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Post Title<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Post Content<span class="form-required">*</span></label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"
                                required>{{ $post->body }}</textarea>
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
                            <input type="date" name="created_at" class="form-control" value="{{ $post->created_at }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Categori<span class="form-required">*</span></label>
                            <select class="js-example-basic-multiple form-control" name="category[]" multiple="multiple"
                                required>

                                <option value=""></option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>

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
