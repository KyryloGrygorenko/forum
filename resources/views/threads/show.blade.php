@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#" >{{$thread->creator->name}}</a> posted:
                        {{$thread->title}}</div>

                    <div class="panel-body">

                        <div class="alert alert-success">
                            {{$thread->body}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    @include('threads.reply')
            </div>
        </div>

        @if (auth()->check())
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                  <form method="POST" action="/threads/{{$thread->channel->slug}}/{{$thread->id}}/replies">
                      {{csrf_field()}}
                      <div class="form-group">
                          <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default">Post</button>
                  </form>
            </div>
        </div>
        @else
            <p class="text-center">Please <a href="{{route('login')}}"> sign in </a> to particapate in this discussion.</p>
        @endif
    </div>
@endsection
