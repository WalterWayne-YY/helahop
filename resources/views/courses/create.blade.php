@extends('layouts.dash')

@section('content')
         <div align="right">
           <a href="/courses" class="btn btn-primary">back</a>
         </div>
            <h1>Add New Course</h1>            
         
        {!! Form::open(['action'=>'CoursesController@store','method'=>'POST']) !!}
            <div class="form-group">
               {{form::label('coursename','Course Name')}}
               {{form::text('coursename','',['class'=>'form-control','placeholder'=>'Enter Course Name'])}}
            </div>   
            
            <div class="form-group">
                    {{form::label('lecs','Lectures')}}
                    {{form::text('lecs','',['class'=>'form-control','placeholder'=>'Lectures'])}}
            </div>

            <div class="form-group">
                    {{form::label('news','News')}}
                    {{form::text('news','',['class'=>'form-control','placeholder'=>'News'])}}
             </div>

            <div class="form-group">
                    {{form::label('vids','Videos')}}
                    {{form::text('vids','',['class'=>'form-control','placeholder'=>'Videos'])}}
             </div>

            <div class="form-group">
                    {{form::label('summ','Summary')}}
                    {{form::text('summ','',['class'=>'form-control','placeholder'=>'Enter Summary'])}}
             </div>

             {{form::submit('submit',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
            
            
@endsection