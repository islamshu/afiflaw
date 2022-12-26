<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('dashboard.sliders.create')->with('slider',Slider::first());
    }
    public function store(Request $request){
        $slider = Slider::first();
        if($request->image != null){
            $slider->image = $request->image->store('image');
        }
        $slider->text = $request->text;
        $slider->text_button = $request->text_button;
        $slider->url = $request->url;
        $slider->save();
        return redirect()->back()->with(['success'=>'تم تعديل القسم الاول بنجاح']);
    }
}
