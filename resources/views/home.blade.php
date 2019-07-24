@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ Auth::user()->profile_picture }}" alt="">
                    WELCOME TO THE CLUB {{ Auth::user()->username}}
                      <div>
                        <ul class="nav nav-tabs" role="tablist">
                          <div class = "btn-toolbar">
                              <button role="presentation" type="button" class="btn btn-default" class="active" href="#posts" aria-controls="posts" role="tab" data-toggle="tab"> Post </button>
                              <button role="presentation" type="button" class="btn btn-default" href="#comments" aria-controls="comments" role="tab" data-toggle="tab"> Comments </button>
                              <button role="presentation" type="button" class="btn btn-default" href="#categories" aria-controls="categories" role="tab" data-toggle="tab"> Categories </button>
                          </div>
                        <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
                        </ul>

                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="posts">
                            {{ Auth::user()->posts()->count() }} posts created.
                            @foreach (Auth::user()->posts as $post)
                              <div class ="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">{{ $post->title }}</h3>
                                </div>
                                <div class="panel-body">
                                  {{ $post->body }}
                                  <br/>
                                  Category::<div class="badge">{{ $post->category->name }}

                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>


                          <div role="tabpanel" class="tab-pane active" id="comments">
                            All comments created by this user will be showed here.
                          </div>
                          <div role="tabpanel" class="tab-pane active" id="categories">
                            All categories created by this user will be showed here.
                          </div>

                          <!-- <div role="tabpanel" class="tab-pane" id="messages">...</div>
                          <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
