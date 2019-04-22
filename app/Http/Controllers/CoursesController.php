<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = courses::orderBy('created_at','desc')->paginate(10);
         return view('courses.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = courses::all();
        return view('courses.create')->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'coursename'       =>'required',
            'lecs'        =>'required',
            'news'        =>'required',
            'vids'        =>'required',
            'summ'        =>'required',
            
        ]);
        //create course
        $course=new courses;
        $course->coursename       = $request ->input('coursename');
        $course->lecs      = $request ->input('lecs');
        $course->news      = $request ->input('news');
        $course->vids      = $request ->input('vids');
        $course->summ      = $request ->input('summ');
        $course->save();

        
        return redirect('/courses')->with('success','course added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = courses::find($id);
        return view('courses.show')->with('course',$course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = courses::find($id);
        return view('courses.edit')->with('course',$course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'coursename'       =>'required',
            'lecs'             =>'required',
            'news'             =>'required',
            'vids'             =>'required',
            'summ'             =>'required',
            
        ]);
        //create course
        $course = courses::find($id);
        $course->coursename       = $request ->input('coursename');
        $course->lecs             = $request ->input('lecs');
        $course->news             = $request ->input('news');
        $course->vids             = $request ->input('vids');
        $course->summ             = $request ->input('summ');
        $course->save();

        
        return redirect('/courses')->with('success','course added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = courses::find($id);
        $course->delete();
        return redirect('/courses')->with('success','course deleted');
    }
}
