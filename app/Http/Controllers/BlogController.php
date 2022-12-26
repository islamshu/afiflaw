<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blogs.index')->with('blogs',Blog::orderBy('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'title'=>'required',
            'body'=>'required'
        ]);
        $service = new Blog();
        $service->image = $request->image->store('service');
        $service->title = $request->title;
        $service->body = $request->body;
        $service->slug = str_replace(' ','_',$service->title) .'_'. Blog::count() +1;
        $service->save();
        return redirect()->route('blogs.index')->with(['success'=>'تم الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.blogs.edit')->with('blog',Blog::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Blog::find($id);
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        if($request->image != null){
            $service->image = $request->image->store('service');
        }
        $service->title = $request->title;
        $service->body = $request->body;
        $service->slug = str_replace(' ','_',$service->title) .'_'. $id;
        $service->save();
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Blog::find($id);
        $service->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);
    }
}
