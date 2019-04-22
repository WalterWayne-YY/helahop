@extends('layouts.dash')

@section('content')
         <div align="right">
           <a href="/clients" class="btn btn-primary">back</a>
         </div>
            <h1>Add New Courses</h1>            
         
        {!! Form::open(['action'=>['CoursesController@update',$course->id],'method'=>'POST']) !!}
            <div class="form-group">
               {{form::label('coursename','Course Name')}}
               {{form::text('coursename',$course->coursename,['class'=>'form-control','placeholder'=>'Enter Your Course Name...'])}}
            </div>   
            
            <div class="form-group">
                    {{form::label('lecs','Lectures')}}
                    {{form::text('lecs',$course->lecs,['class'=>'form-control','placeholder'=>'Lectures'])}}
            </div>    

            <div class="form-group">
                     {{form::label('news','News')}}
                     {{form::text('news',$course->news,['class'=>'form-control','placeholder'=>'News'])}}
             </div>

            <div class="form-group">
                     {{form::label('vids','Videos')}}
                     {{form::text('vids',$course->vids,['class'=>'form-control','placeholder'=>'Videos'])}}
             </div>

            <div class="form-group">
                     {{form::label('summ','Summary')}}
                     {{form::text('summ',$course->summ,['class'=>'form-control','placeholder'=>'Enter Summary'])}}
             </div>
             {{form::hidden('_method','PUT')}}
             {{form::submit('submit',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
            
            
@endsection