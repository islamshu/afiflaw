<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('dashboard.about.create')->with('about',About::first());
    }
    public function store(Request $request){
        $request->validate([
            'text'=>'required'
        ]);
        $slider = About::first();
        if($request->image != null){
            $slider->image = $request->image->store('image');
        }
        $slider->text = $request->text;
        $slider->save();
        return redirect()->back()->with(['success'=>'تم تعديل القسم بنجاح']);
    }
}
