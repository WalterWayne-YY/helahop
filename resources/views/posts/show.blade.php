@extends('layouts.dash')

@section('content')
          

            <div>
                <a href="/posts" class="btn btn-primary">back</a>
                </div>
                    <div class="well">
                    <h2>Title: {{$post->title}}</h2>
                    <h4>Post: {{$post->body}}</h4>
                </div>
            
            
@endsection