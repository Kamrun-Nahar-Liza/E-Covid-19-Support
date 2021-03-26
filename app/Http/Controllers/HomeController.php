<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\User;
use App\Covid;
use App\Country;
use App\Profile;
use App\PlasmaPost;
use App\PlasmaProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function homepage()
    {
   
        $data = DB::table('covids')
                        ->select('*')
                        ->orderBy('id','desc')
                        ->limit(1)
                        ->get();
       
        // (select infect from covids ORDER BY id DESC LIMIT 1);

        $totalinfect = DB::table('covids')
                ->sum('infect');
                // ->get();

        $totaldeath = DB::table('covids')
                ->sum('death');

        $totalcure = DB::table('covids')
        ->sum('cure');

        $totaltest = DB::table('covids')
                ->sum('test');

        // dd($totalinfect);
        
        return view ('homepage', compact('data', 'totalinfect','totaldeath','totalcure','totaltest'));

        
    }

    public function index()
    {
        return view('home');
    }


    public function doctorindex()
    {
   
        $data = DB::table('covids')
                        ->select('*')
                        ->orderBy('id','desc')
                        ->limit(1)
                        ->get();
       
        // (select infect from covids ORDER BY id DESC LIMIT 1);

        $totalinfect = DB::table('covids')
                ->sum('infect');
                // ->get();

        $totaldeath = DB::table('covids')
                ->sum('death');

        $totalcure = DB::table('covids')
        ->sum('cure');

        $totaltest = DB::table('covids')
                ->sum('test');

        // dd($totalinfect);
        
        return view ('doctor', compact('data', 'totalinfect','totaldeath','totalcure','totaltest'));
    }

     public function patientindex()
    {
        $data = DB::table('covids')
                        ->select('*')
                        ->orderBy('id','desc')
                        ->limit(1)
                        ->get();
       
        // (select infect from covids ORDER BY id DESC LIMIT 1);

        $totalinfect = DB::table('covids')
                ->sum('infect');
                // ->get();

        $totaldeath = DB::table('covids')
                ->sum('death');

        $totalcure = DB::table('covids')
        ->sum('cure');

        $totaltest = DB::table('covids')
                ->sum('test');
                
        return view('patient', compact('data', 'totalinfect','totaldeath','totalcure','totaltest'));
    }

    public function plasmadonorindex()
    {   
        $data = DB::table('covids')
                        ->select('*')
                        ->orderBy('id','desc')
                        ->limit(1)
                        ->get();
       
        // (select infect from covids ORDER BY id DESC LIMIT 1);

        $totalinfect = DB::table('covids')
                ->sum('infect');
                // ->get();

        $totaldeath = DB::table('covids')
                ->sum('death');

        $totalcure = DB::table('covids')
        ->sum('cure');

        $totaltest = DB::table('covids')
                ->sum('test');

        return view('plasmadonor', compact('data', 'totalinfect','totaldeath','totalcure','totaltest'));
    }

    public function adminindex()
    {
        $data = DB::table('covids')
                        ->select('*')
                        ->orderBy('id','desc')
                        ->limit(1)
                        ->get();
       
        // (select infect from covids ORDER BY id DESC LIMIT 1);

        $totalinfect = DB::table('covids')
                ->sum('infect');
                // ->get();

        $totaldeath = DB::table('covids')
                ->sum('death');

        $totalcure = DB::table('covids')
        ->sum('cure');

        $totaltest = DB::table('covids')
                ->sum('test');

                

        return view('admin', compact('data', 'totalinfect','totaldeath','totalcure','totaltest'));
    }

    public function service()
    {
        return view('Homepages.service');
    }

    public function doctorlist()
    {
        $data=[];
        $data['profiles'] = Profile::all();
        return view('Homepages.doctorlist',$data);
    }

    public function donorlist()
    {
        $data=[];
        $data['plasmaprofiles'] = PlasmaProfile::all();
        return view('Homepages.donorlist',$data);
    }

    
    public function doctor_activity()
    {   
        $data['posts'] = Post::all();
        $data['countries'] = Country::all();
        return view('activity.doctor_activity', $data);
    }

    public function patient_activity()
    {
        $data['plasmaposts'] = PlasmaPost::all();
        $data['countries'] = Country::all();
        return view('activity.patient_activity',$data);
    }



//     Doctor Verification

        public function Accept(Request $request)
        {
        $id = $request->id;
        $user = User::find($id);
        $user->is_doctor = '1';
        $user->save();
        }

        public function Pending(Request $request)
        {
        $id = $request->id;
        $user = User::find($id);
        $user->is_doctor = '0';
        $user->save();
        }

//verify list

        public function verify(){

        $newdata = DB::table('users')
        ->select('*')
        ->where('role', '=' ,'doctor')
        
        ->get();

        return view('activity.verify_doctor', compact('newdata'));

        }

//doctor_delete
        public function doctor_delete($id){
                $user = User::find($id);
               $user->delete();

        //redirect
        return view('activity.verify_doctor');
        }

}
