@extends('layouts.dash')

@section('content')
         <div align="right">
           <a href="/posts" class="btn btn-primary">back</a>
         </div>
            <h1>Add New Post</h1>            
         
        {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
            <div class="form-group">
               {{form::label('title','Title')}}
               {{form::text('title','',['class'=>'form-control','placeholder'=>'Enter Title...'])}}
            </div>   
            
            <div class="form-group">
                    {{form::label('body','Post')}}
                    {{form::text('body','',['class'=>'form-control','placeholder'=>'Post..'])}}
            </div>

             {{form::submit('submit',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
            
            
@endsection