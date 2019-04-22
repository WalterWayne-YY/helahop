@extends('layouts.dash')

@section('content')
  <div align="right">
    <a href="/courses" class="btn btn-primary">back</a>
  </div>
  <div class="well">
    <h2>Title: {{$course->coursename}}</h2>
    <h4>ID: {{$course->id}}</h4>
    <h4>Lectures: {{$course->lecs}}</h4>
    <h4>News: {{$course->news}}</h4>
    <h4>Videos: {{$course->vids}}</h4>
    <h4>Summary: {{$course->summ}}</h4>
  </div>        
@endsection