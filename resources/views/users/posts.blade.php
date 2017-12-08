@extends('layouts.app')


@section('content')

    @foreach($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">{{$post->title}}</div>
       
            <div class="panel-body">
            @if($post->file != null)
                <center>
                    <img class="img-thumbnail" src="{{$post->file}}">
                    <hr>
                </center>
            @endif
              <p>{{$post->body}}</p>
            </div>
            <div class="panel-footer">
                <div class="row">
                   <div class="col-sm-12">
                       <img width="10%" src="{{$post->user->file}}" class="img-circle">
                       <small> {{$post->user->name}}</small>
                   </div>
                </div>
           </div>
       </div>    
    @endforeach
    
    {{ $posts->render() }}

@endsection