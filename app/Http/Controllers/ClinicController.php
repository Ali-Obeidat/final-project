<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Clinic;
use App\Models\ClinicAppointment;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinics = Category::with('clinics')->get();
        // return $clinics;
        return view('admin.clinic.index', compact('clinics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
        $subs = SubCategory::all();
        return view('admin.clinic.create' ,compact('categories','subs'));
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
      $input=   $request->validate([
        'name'=>'required',
        'doctor_name'=>'required',
        'location'=>'required',
        'insurance'=>'required',
        'gender'=>'required',
        'category_id'=>'required',
        'img'=>'file',


        ]);
        // return $input;
        // $sub = json_encode($request['sub']);
        // return $request['sub'];
        // return $input['img'];
        if (request('img')) {
            $input['img']= request('img')->store('images');
        }
        $clinic= Clinic::create([
            'name'=>$input['name'],
            'doctor_name'=>$input['doctor_name'],
            'category_id'=>$input['category_id'],
            'location'=>$input['location'],
            'insurance'=>$input['insurance'],
            'gender'=>$input['gender'],
            'education'=>$request['education'],
            'description'=>$request['description'],
            'professional_background'=>$request['professional_background'],
            'clinic_specialty'=>$request['clinic_specialty'],
            'img'=>$input['img'],
        ]);
        
        $sub = $request['sub'];
        foreach ($sub as  $value) {
            $clinic->SubCategories()->attach($value);
        }
        
        // Alert::success('Success', 'Your post is saved');
        return back()->with('success', 'Clinic created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function show(Clinic $clinic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinic $clinic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinic $clinic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $clinic = Clinic::findOrFail($id);
        $clinic-> delete();
        Session()->flash('massage','clinic was deleted');

        return back();
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        // return $request->category_id;
    //   return  $data = Clinic:: where('category_id', $request->category_id )->get();
    $data = DB::table('clinics');
        if( $request->category_id){
            $data = $data->where('category_id', $request->category_id );
        }
        if( $request->location){
            $data = $data->where('location', 'LIKE', "%" . $request->location . "%");
        }
        if( $request->INSURANCE ){
            $data = $data->where('insurance', 'LIKE', "%" . $request->INSURANCE . "%");
                         
        }
        if( $request->doctor_name ){
            $data = $data->where('doctor_name', 'LIKE', "%" . $request->doctor_name . "%");
                         
        }
        // return  $data->get();
        $data = $data->paginate(10);
        return view('userSide.clinics_grid', compact('data','categories'));
    }
public function clinicDetail($id)
{
    
    $times =[
        '9:00 AM',
        '9:30 AM',
        '10:00 AM',
        '10:30 AM',
        '11:00 AM',
        '11:30 AM',
        '12:00 PM',
        '12:30 PM', 
        '1:00 PM',
        '1:30 PM',
        '2:00 PM',
        '2:30 PM',
        '3:00 PM',
        '3:30 PM',
        '4:00 PM',
        '4:30 PM',
        '5:00 PM',
    ];
    
    $clinicAppointment = ClinicAppointment::where('clinic_id' , $id)->get();
    $clinicAppointmentID= $clinicAppointment[0]->id;
    $clinic= Clinic::find($id);
   $days= $clinicAppointment[0]->schedule_data[0];
    // return $days;
    return view('userSide.clinic_details',compact('clinic','days','times','clinicAppointmentID'));
}
}
