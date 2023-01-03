<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\DataInfo;
use App\Models\General;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\User;
use App\Models\WhyUs;
use App\Notifications\LaravelTelegramNotification;
use Dflydev\DotAccessData\Data;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    
    public function home()
    {
        $first = Slider::first();
        $about = About::first();
        $whyus = WhyUs::orderby('sort','asc')->get();
        $services = Service::get();
        $clients = Client::orderby('id','desc')->get();
        $teams = Team::get(); 


        return view('frontend.index')
        ->with('first',$first)
        ->with('about',$about)
        ->with('whyus',$whyus)
        ->with('teams',$teams)
        ->with('services',$services)
        ->with('clients',$clients);
    }
    public function pren(){
        $first = Slider::first();
        $about = About::first();
        $whyus = WhyUs::orderby('sort','asc')->get();
        $services = Service::get();
        $clients = Client::orderby('id','desc')->get();
        $teams = Team::get(); 


        return view('frontend.pens')
        ->with('first',$first)
        ->with('about',$about)
        ->with('whyus',$whyus)
        ->with('teams',$teams)
        ->with('services',$services)
        ->with('clients',$clients);
    }
 

    public function login_dashboard()
    {
        return view('dashboard.auth.login');
    }
    public function single_blog($slug){
        $blog = Blog::where('slug',$slug)->first();
        if($blog){
            $first = Slider::first();
            $about = About::first();
            $whyus = WhyUs::orderby('sort','asc')->get();
            $services = Service::get();
            $clients = Client::orderby('id','desc')->get();
    
    
            return view('frontend.blog')
            ->with('first',$first)
            ->with('blog',$blog)
            ->with('about',$about)
            ->with('whyus',$whyus)
            ->with('services',$services)
            ->with('clients',$clients);
        }
    }
    public function teams(){
       
            $first = Slider::first();
            $about = About::first();
            $whyus = WhyUs::orderby('sort','asc')->get();
            $services = Service::get();
            $clients = Client::orderby('id','desc')->get();
    
    
            return view('frontend.team')
            ->with('first',$first)
            ->with('about',$about)
            ->with('whyus',$whyus)
            ->with('services',$services)
            ->with('clients',$clients);
        
    }
    public function blogs(){
        $blogs = Blog::orderby('id','desc')->paginate(8);
        $first = Slider::first();
        $about = About::first();
        $whyus = WhyUs::orderby('sort','asc')->get();
        $services = Service::get();
        $clients = Client::orderby('id','desc')->get();


        return view('frontend.blogs')
        ->with('first',$first)
        ->with('about',$about)
        ->with('whyus',$whyus)
        ->with('services',$services)
        ->with('clients',$clients)
        ->with('blogs',$blogs);


    }
    public function register()
    {
        return view('dashboard.auth.register');
    }
    public function post_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();
        auth()->login($user, true);
        return redirect()->route('home');
    }
      


    public function login_dashboard_post(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(auth()->user()->type == 'user'){
                return redirect()->route('home');
            }else{
                return redirect('/dashboard');
            }
        } else {
            return redirect()->back()->with(['error' => 'The data does not match our records'])->withInput($request->input());
        }
    }
    public function get_setting()
    {
        return view('dashboard.setting');
    }
    public function social()
    {
        return view('dashboard.social');
    }
    public function store_message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'message' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
       
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
  
        return response()->json(['success' => 'تم ارسال الطلب بنجاح']);
    }
    public function get_setting_post(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('general_file')) {
            foreach ($request->file('general_file') as $name => $value) {
                if ($value == null) {
                    continue;
                }
                General::setValue($name, $value->store('general'));
            }
        }

        foreach ($request->input('general') as $name => $value) {
            if ($value == null) {
                General::setValue($name, $value);
            }
            General::setValue($name, $value);
        }

        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }
    public function services(){
        $first = Slider::first();
        $about = About::first();
        $whyus = WhyUs::orderby('sort','asc')->get();
        $services = Service::get();
        $clients = Client::orderby('id','desc')->get();


        return view('frontend.services')
        ->with('first',$first)
        ->with('about',$about)
        ->with('whyus',$whyus)
        ->with('services_section',Service::orderBy('id','desc')->paginate(9))
        ->with('services',$services)
        ->with('clients',$clients);
    }
    public function singe_services($slug){
        $first = Slider::first();
        $about = About::first();
        $whyus = WhyUs::orderby('sort','asc')->get();
        $services = Service::get();
        $clients = Client::orderby('id','desc')->get();
        $service = Service::where('slug',$slug)->first();
        return view('frontend.service')
        ->with('first',$first)
        ->with('about',$about)
        ->with('whyus',$whyus)
        ->with('services_section',Service::orderBy('id','desc')->paginate(9))
        ->with('services',$services)
        ->with('service',$service)
        ->with('clients',$clients);
    }
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function logout_user()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function edit_profile()
    {
        return view('dashboard.auth.profile')->with('user', auth()->user());
    }
    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if ($request->password != null) {
            $request->validate([
                'password' => 'required',
                'confirm-password' => 'same:password'
            ]);
        }
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }
}
