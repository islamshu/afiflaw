<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        return view('dashboard.teams.index')->with('teams',Team::get());
    }
    public function create(){
        return view('dashboard.teams.create');
    }
    public function store(Request $request){
        $principle = new Team();
        $principle->image = $request->image->store('teams');
        $principle->title = $request->title;
        $principle->job = $request->job;
        $principle->save();
        return redirect()->route('teams.index')->with(['success'=>'تم الانشاء بنجاح']);
    }
    public function get_form_team(Request $request){
        return view('dashboard.teams.edit')->with('team',Team::find($request->id));
    }
    
    public function update(Request $request,$id){
        $principle = Team::find($id);
        if($request->image != null){
            $principle->image = $request->image->store('teams');
        }
        $principle->title = $request->title;
        $principle->job = $request->job;
        $principle->save();
        return redirect()->route('teams.index')->with(['success'=>'تم التعديل بنجاح']);
    }
    public function destroy($id){
        $principle = Team::find($id)->delete();
        return redirect()->route('teams.index')->with(['success'=>'تم الحذف بنجاح']);
    }
}
