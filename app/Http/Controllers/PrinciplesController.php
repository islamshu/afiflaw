<?php

namespace App\Http\Controllers;

use App\Models\Principles;
use Illuminate\Http\Request;

class PrinciplesController extends Controller
{
    public function index(){
        return view('dashboard.principles.index')->with('principles',Principles::get());
    }
    public function create(){
        return view('dashboard.principles.create');
    }
    public function store(Request $request){
        $principle = new Principles();
        $principle->title = $request->title;
        $principle->body = $request->body;
        $principle->save();
        return redirect()->route('principles.index')->with(['success'=>'تم الانشاء بنجاح']);
    }
    public function get_form_principle(Request $request){
        return view('dashboard.principles.edit')->with('principle',Principles::find($request->id));
    }
    public function edit($id){
        return view('dashboard.principles.edit')->with('principle',Principles::find($id));
    }
    public function update(Request $request,$id){
        $principle = Principles::find($id);
        $principle->title = $request->title;
        $principle->body = $request->body;
        $principle->save();
        return redirect()->route('principles.index')->with(['success'=>'تم التعديل بنجاح']);
    }
    public function destroy($id){
        $principle = Principles::find($id)->delete();
        return redirect()->route('principles.index')->with(['success'=>'تم الحذف بنجاح']);
    }
}
