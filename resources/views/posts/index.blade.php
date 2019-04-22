@extends('layouts.dash')

@section('content')

{{-- add button --}}
  <div align="right">
    <a href="/posts/create" class="btn btn-success">Add Post</a>
  </div>
  
  <br>

  {{-- posts table --}}
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
      </tr>
    </thead>
    @if( count($posts) > 0 )
    @foreach($posts as $post)
      <tbody>
        <tr>
          <td>{{$post->id}}</td>
          <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
          <td>{{$post->body}}</td>
          <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
          <td>
          {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
          {{form::hidden('_method','DELETE')}}
          {{form::submit('Delete',['class'=>'btn btn-danger'])}}
          {!! Form::close() !!}
          </td>
        </tr>
      </tbody>
    @endforeach
    {{$posts->links()}}
    @else 
      <p>No posts Found</p>
    @endif
  </table>
@endsection


