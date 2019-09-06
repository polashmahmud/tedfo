@extends('layouts.app')

@section('title', 'Post')

@section('page-title', 'Post')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">My All Post</h3>
                <div class="card-options">
                    <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm"><i class="fe fe-plus"></i>
                        Create
                        New Post</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table card-table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Post Title</th>
                            <th>Post Content</th>
                            <th>Categori</th>
                            <th>Publish Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td><span class="avatar" style="background-image: url({{ $post->image }})"></span></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>
                                @foreach ($post->categories as $category)
                                <span class="tag">{{ $category->title }}</span>
                                @endforeach
                            </td>
                            <td class="text-nowrap">{{ $post->created_at->format('M d, y') }}</td>
                            <td class="w-1">
                                <a href="{{ route('post.edit', $post->id) }}" class="icon"><i
                                        class="fe fe-edit"></i></a>
                                <form id="delete-form-{{ $post->id }}" method="post"
                                    action="{{ route('post.destroy', $post->id) }}" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a class="icon" href="" onclick="if(confirm('Are you sure, You Want to delete this?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $post->id }}').submit();
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
                <div class="ml-5">{{ $posts->links() }}</div>


            </div>
        </div>
    </div>
</div>

@endsection
