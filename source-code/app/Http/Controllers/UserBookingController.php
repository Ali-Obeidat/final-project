<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\userBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserBookingController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userBooking  $userBooking
     * @return \Illuminate\Http\Response
     */
    public function show(userBooking $userBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userBooking  $userBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(userBooking $userBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userBooking  $userBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userBooking $userBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userBooking  $userBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // return $id;
        $booking = UserBooking::find($id);
        $user= Auth::user();
        $booking2= Booking::where('user_name',$user->name)
        ->where('phone',$user->phone)
        ->where('clinic_id',$booking->clinic_id )
        ->where('the_patient',$booking->the_patient)
        ->where('time',$booking->time)
        ->where('day',$booking->day)->get();
            // return $booking2;
            // dd($booking2->all());
            $booking2[0]->delete();
        $booking->delete();
        Alert::error('Canceled', 'Appointment was Canceled');

        return back();
    }
}
