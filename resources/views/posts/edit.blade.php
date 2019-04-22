@extends('layouts.dash')

@section('content')
         <div align="right">
           <a href="/posts" class="btn btn-primary">back</a>
         </div>
        <h1>Edit Post {{$post->title}}</h1>            
         
        {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
            <div class="form-group">
               {{form::label('title','Title')}}
               {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>   
            
            <div class="form-group">
                    {{form::label('body','Post')}}
                    {{form::text('body',$post->body,['class'=>'form-control','placeholder'=>'Enter Post'])}}
            </div>

             {{form::hidden('_method','PUT')}}
             {{form::submit('submit',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
            
            
@endsection