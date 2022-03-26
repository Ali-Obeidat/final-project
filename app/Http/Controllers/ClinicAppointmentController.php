<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\ClinicAppointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClinicAppointmentController extends Controller
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
        $monday = Carbon::now()->startOfWeek()->addWeek();
        $sunday = $monday->copy()->subDays();
        $saturday = $sunday->copy()->subDays();
        $tuesday = $monday->copy()->addDay();
        $wednesday = $tuesday->copy()->addDay();
        $thursday = $wednesday->copy()->addDay();
        $friday = $thursday->copy()->addDay();
        // if ($sunday === Carbon::SUNDAY) {
        //     return 'ali';
        // }
        
        $week = [
            'Saturday' => $saturday->format('Y-m-d'),
            'Sunday' => $sunday->format('Y-m-d'),
            'Monday' => $monday->format('Y-m-d'),
            'Tuesday' => $tuesday->format('Y-m-d'),
            'Wednesday' => $wednesday->format('Y-m-d'),
            'Thursday' => $thursday->format('Y-m-d'),
            'Friday' => $friday->format('Y-m-d'),
        ];
        $times =[
            '9:00',
            '9:30',
            '10:00',
            '10:30',
            '11:00',
            '11:30',
            '12:00',
            '12:30', 
            '13:00',
            '13:30',
            '14:00',
            '14:30',
            '15:00',
            '15:30',
            '16:00',
            '16:30',
            '17:00',
        ];
        // $carbaoDay =  Carbon::createFromFormat('Y-m-d', '2022-03-12');
        // $week = [];
        // for ($i = 0; $i < 7; $i++) {
        //     $week[] = $carbaoDay->startOfWeek()->addDay($i)->format('Y-m-d'); //push the current day and plus the mount of $i 
        // }
        // return  $week;
            $clinics = Clinic::all();
        return view('admin.clinic.createAppointments',compact('week','times','clinics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input['schedule_data']=  json_encode($request);
        // return  $request['$request'];
        $monday = Carbon::now()->startOfWeek()->addWeek();
        $sunday = $monday->copy()->subDays();
        $saturday = $sunday->copy()->subDays();
        $tuesday = $monday->copy()->addDay();
        $wednesday = $tuesday->copy()->addDay();
        $thursday = $wednesday->copy()->addDay();
        $friday = $thursday->copy()->addDay();
        // if ($sunday === Carbon::SUNDAY) {
        //     return 'ali';
        // }
        
        $week = [
            'Saturday' => $saturday->format('Y-m-d'),
            'Sunday' => $sunday->format('Y-m-d'),
            'Monday' => $monday->format('Y-m-d'),
            'Tuesday' => $tuesday->format('Y-m-d'),
            'Wednesday' => $wednesday->format('Y-m-d'),
            'Thursday' => $thursday->format('Y-m-d'),
            'Friday' => $friday->format('Y-m-d'),
        ];
      $clinic=  $request->validate([
            'clinic_id'=> 'required',
        ]);
        $input['schedule_data']=[];
        foreach ($week as $key =>  $value) {
            $data[$value] =[];
            array_push($data[$value],$request[$value]) ;
            
        }
        array_push($input['schedule_data'],$data) ;

        ClinicAppointment::create([
            'clinic_id'=>$clinic['clinic_id'],
            'schedule_data'=>$input['schedule_data'],
        ]);
        return   back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicAppointment  $clinicAppointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $times =[
            '9:00',
            '9:30',
            '10:00',
            '10:30',
            '11:00',
            '11:30',
            '12:00',
            '12:30', 
            '13:00',
            '13:30',
            '14:00',
            '14:30',
            '15:00',
            '15:30',
            '16:00',
            '16:30',
            '17:00',
        ];
        $clinicAppointment = ClinicAppointment::where('clinic_id' , $id)->get();
        $clinicAppointmentID= $clinicAppointment[0]->id;
        $clinic= Clinic::find($id);
       $days= $clinicAppointment[0]->schedule_data[0];
    //    foreach ($days as $key => $value) {
    //        echo $key."<br>";
    //    }
    //    return $days;
        return view('admin.clinic.showAppointment',compact('days','clinic','times','clinicAppointmentID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicAppointment  $clinicAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit(ClinicAppointment $clinicAppointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicAppointment  $clinicAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // return $request;
        $monday = Carbon::now()->startOfWeek()->addWeek();
        $sunday = $monday->copy()->subDays();
        $saturday = $sunday->copy()->subDays();
        $tuesday = $monday->copy()->addDay();
        $wednesday = $tuesday->copy()->addDay();
        $thursday = $wednesday->copy()->addDay();
        $friday = $thursday->copy()->addDay();
        // if ($sunday === Carbon::SUNDAY) {
        //     return 'ali';
        // }
        
        $week = [
            'Sunday' => $sunday->format('Y-m-d'),
            'Saturday' => $saturday->format('Y-m-d'),
            'Monday' => $monday->format('Y-m-d'),
            'Tuesday' => $tuesday->format('Y-m-d'),
            'Wednesday' => $wednesday->format('Y-m-d'),
            'Thursday' => $thursday->format('Y-m-d'),
            'Friday' => $friday->format('Y-m-d'),
        ];
        $ClinicAppointment = ClinicAppointment::find($id);
        $input['schedule_data']=[];
        foreach ($week as $key =>  $value) {
            $data[$value] =[];
            array_push($data[$value],$request[$value]) ;
            
        }
        array_push($input['schedule_data'],$data) ;
        $ClinicAppointment->clinic_id = $request['clinic_id'];
        $ClinicAppointment->schedule_data = $input['schedule_data'];
        $ClinicAppointment->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicAppointment  $clinicAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClinicAppointment $clinicAppointment)
    {
        //
    }
}
