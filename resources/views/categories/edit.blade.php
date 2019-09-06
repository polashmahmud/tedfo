@extends('layouts.app')

@section('title', 'Categori')

@section('page-title', 'Categori')


@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Categori</h3>
                <div class="card-options">
                    <a href="{{ route('categories.index') }}" class="btn btn-primary"><i class="fe fe-arrow-left"></i>
                        Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.update', $categori->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <fieldset class="form-fieldset">
                        <div class="form-group">
                            <label class="form-label">Categori Name<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $categori->title }}">
                        </div>
                        <div class="form-group mb-0 mt-5">
                            <button type="submit" class="btn btn-info btn-block">Update Categori</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Categori</h3>
            </div>

            <div class="table-responsive">
                <table class="table card-table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Categories Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categori)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $categori->title }}</td>

                            <td class="w-1">
                                    <a href="{{ route('categories.edit', $categori->id) }}" class="icon"><i
                                        class="fe fe-edit"></i></a>
                            </td>
                            <td class="w-1">
                                <form id="delete-form-{{ $categori->id }}" method="post"
                                    action="{{ route('categories.destroy', $categori->id) }}" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a class="icon" href="" onclick="if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $categori->id }}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }"><i class="fe fe-trash"></i>
                                </a>

                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <hr>
                <div class="ml-5">{{ $categories->links() }}</div>
            </div>
        </div>
    </div>
</div>

@endsection
