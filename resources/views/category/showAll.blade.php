@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-6 col-sm-offset-3">
    @foreach ($posts as $post)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            Created by : {{ $post->user->username}}, {{ $post -> title }}
          </h3>
        </div>

        <div class="panel-body">
          {{ $post -> body }}
          @if ($post->image != null)
              <img src="/images/{{ $post->image }}" alt="Image" width="100%" height="600">
          @endif
          <br/>
          <h6>Category :<span class="badge">{{ $post->category->name }}</span></h6>
        </div>

        <div class="panel-footer">
            <button href="#" type="button" class="btn btn-default">Like</button>
            <button href="#" type="button" class="btn btn-default">Dislike</button>
            <button href="#" type="button" class="btn btn-default">Comment</button>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
