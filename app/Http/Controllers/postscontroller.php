<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = posts::orderBy('created_at','desc')->paginate(10);
         return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = posts::all();
        return view('posts.create')->with('posts', $posts);
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
            'title'       =>'required',
            'body'        =>'required',
            
        ]);
        
        //create post
        $post=new posts;
        $post->title       = $request ->input('title');
        $post->body      = $request ->input('body');
        $post->save();

        
        return redirect('/posts')->with('success','post added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = posts::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = posts::find($id);
        return view('posts.edit')->with('post',$post);
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
            'title'       =>'required',
            'body'        =>'required',
            
        ]);
        //update client and save
        $post = posts::find($id);
        $post->title       = $request ->input('title');
        $post->body      = $request ->input('body');
        $post->save();

        
        return redirect('/posts')->with('success','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = posts::find($id);
        $post->delete();
        return redirect('/posts')->with('success','post deleted');
    }
}
