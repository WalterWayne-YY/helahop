@extends('layouts.dash')

@section('content')

        {{-- add button --}}
              <div align="right">
                <a href="/courses/create" class="btn btn-success">Add course</a>
              </div>
              <br>
       {{-- clients table --}}
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Course</th>
                                <th>Lectures</th>
                                <th>News</th>
                                <th>Videos</th>
                                <th>Summary</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
             @if( count($courses) > 0 )
                    @foreach($courses as $course)
                            <tbody>
                              <tr>
                                <td>{{$course->id}}</td>
                                <td><a href="/courses/{{$course->id}}">{{$course->coursename}}</a></td>
                                <td>{{$course->lecs}}</td>
                                <td>{{$course->news}}</td>
                                <td>{{$course->vids}}</td>
                                <td><a href="/courses/{{$course->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                    {!! Form::open(['action'=>['CoursesController@destroy',$course->id],'method'=>'POST']) !!}
                                      {{form::hidden('_method','DELETE')}}
                                      {{form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>
                              </tr>
                            </tbody>
                     @endforeach
                {{$courses->links()}}
            @else 
                <p>No Courses Found</p>
            @endif
                            </table>

@endsection
