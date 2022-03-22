<?php

namespace App\Http\Controllers;

use App\Models\userBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile($id)
    {
        $Appointments = userBooking::with('clinic')->where('user_id', Auth::user()->id)->get();
        $now = Carbon::now();
        $day= $now->format('Y-m-d');
        $hour= $now->timezone('Asia/Riyadh')->format('H:i');
        // return $hour;
        return view('userSide.profile',compact('Appointments','hour','day'));
    }

}
