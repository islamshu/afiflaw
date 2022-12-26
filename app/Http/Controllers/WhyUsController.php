<?php

namespace App\Http\Controllers;

use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index()
    {
        return view('dashboard.whyus.index')->with('whyus',WhyUs::orderBy('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.whyus.create');
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
        ]);
        $why= new WhyUs();
        $why->image = $request->image->store('whyus');
        $why->title = $request->title;
        $why->sort =  WhyUs::count() +1;
        $why->save();
        return redirect()->route('whyus.index')->with(['success'=>'تم الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhyUs  $service
     * @return \Illuminate\Http\Response
     */
    public function show(WhyUs $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhyUs  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.whyus.edit')->with('whyus',WhyUs::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhyUs  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $why = WhyUs::find($id);
        $request->validate([
            'title'=>'required',
        ]);
        if($request->image != null){
            $why->image = $request->image->store('whyus');
        }
        $why->title = $request->title;
        $why->save();
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhyUs  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = WhyUs::find($id);
        $service->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);
    }
}
