@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard - Latest 10 Post')

@section('content')
<div class="row row-cards row-deck">
  @forelse ($posts as $post)
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <a href="#"><img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}"></a>
      <div class="card-body d-flex flex-column">
        <h4><a href="">{{ $post->title }}</a></h4>
        <div class="text-muted">{{ strlen(strip_tags($post->body)) > 50 ? "...ReadMore" : "" }}</div>
        <div class="d-flex align-items-center pt-5 mt-auto">
          <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
          <div>
            <a href="./profile.html" class="text-default">Rose Bradley</a>
            <small class="d-block text-muted">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}} </small>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty
  <p>No Data Found</p>
  @endforelse




</div>
@endsection
