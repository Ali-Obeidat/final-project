<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Clinic;
use App\Models\userBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        if (!Auth::user()) {
            $input = $request->validate([
                'First_Name'=>'required',
                'Last_Name'=>'required',
                'phone'=>'required',
                'the_patient'=>'required',
                'insurance'=>'required',
            ]);
    
            Booking::create([
                'user_name'=> $input['First_Name']. " ". $input['Last_Name'],
                'phone'=> $input['phone'],
                'the_patient'=> $input['the_patient'],
                'insurance'=> $input['insurance'],
                'clinic_id'=> $request['clinic_id'],
                'day'=> $request['day'],
                'time'=> $request['time'],
            ]);
        }else{
            $input = $request->validate([
                'user_name'=>'required',
                'phone'=>'required',
                'the_patient'=>'required',
                'insurance'=>'required',
            ]);
    
            Booking::create([
                'user_name'=> $input['user_name'],
                'phone'=> $input['phone'],
                'the_patient'=> $input['the_patient'],
                'insurance'=> $input['insurance'],
                'clinic_id'=> $request['clinic_id'],
                'day'=> $request['day'],
                'time'=> $request['time'],
            ]);
            userBooking::create([
                'user_id'=> Auth::user()->id,
                'clinic_id'=> $request['clinic_id'],
                'the_patient'=> $input['the_patient'],
                'insurance'=> $input['insurance'],
                'day'=> $request['day'],
                'time'=> $request['time'],
            ]);
        }
       
        Alert::success('Success', 'Booking Done successfully');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // return $request;
        $time =$request['time']; 
        $day =$request['day']; 
        $clinic = Clinic::find($id) ; 
        // return $clinic;
        return view('userSide.booking',compact('time','day','clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $booking= Booking::find( $id);
        $booking-> delete();
        return back()->with('error', 'Deleted successfully');
    }
}
