<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactContoller extends Controller
{
    public function index(){
        return view('dashboard.contact.index')->with('contacts',Contact::orderBy('id','desc')->get());
    }
    public function show($id){
        $contact = Contact::find($id);
        $contact->status = 1;
        $contact->save();
        return view('dashboard.contact.show')->with('contact',$contact);
    }
    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with(['success'=>'تم الحذف العميل']);

    }
}
