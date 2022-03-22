<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Clinic;
use App\Models\ClinicAppointment;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // return  Auth::user()->clinics[0]->id;
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
    public function show($id)
    {
        $clinic =  Clinic::find($id);
        $booking = Booking::where('clinic_id', $id)->get();
        // return $booking;
        return view('admin.clinic.showBooking',compact('booking','clinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ClinicAdmin = Admin::with('clinics')->where('id' , $id)->get();
        $clinic=  $ClinicAdmin[0]->clinics[0];

        $ClinicCategory =Category::find($ClinicAdmin[0]->clinics[0]->category_id) ;
        $ClinicSubCat =$clinic->SubCategories ;
        // return $clinic->SubCategories;
        $categories = Category::all();
        $subs = SubCategory::all();
        return view('admin.clinic.editClinic' ,compact('categories','clinic','subs','ClinicCategory','ClinicSubCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clinic  $clinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
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
            if (request('img')) {
                $input['img']= request('img')->store('images');
            }
           
            
            
            // Alert::success('Success', 'Your post is saved');
            $clinic= Clinic::find($id);
            $clinic->name= $input['name'];
            $clinic->doctor_name= $input['doctor_name'];
            $clinic->category_id= $input['category_id'];
            $clinic->location= $input['location'];
            $clinic->insurance= $input['insurance'];
            $clinic->gender= $input['gender'];
            $clinic->education= $request['education'];
            $clinic->description= $request['description'];
            $clinic->professional_background= $request['professional_background'];
            $clinic->clinic_specialty= $request['clinic_specialty'];
            if (request('img')) {
                $clinic->img = $input['img'];
            }
            $clinic->save();
            $sub = $request['sub'];
            foreach ($sub as  $value) {
                $clinic->SubCategories()->attach($value);
            }
            
            return back()->with('success', 'Clinic Was Updated');
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
    $categories = Category::all();

    $clinicAppointment = ClinicAppointment::where('clinic_id' , $id)->get();
    $clinicAppointmentID= $clinicAppointment[0]->id;
    $clinic= Clinic::find($id);
    $booking = Booking::where('clinic_id',$clinic->id )->get();
    // return $booking;

   $days= $clinicAppointment[0]->schedule_data[0];
   $now = Carbon::now()->format('Y-m-d');
   $time= Carbon::now()->timezone('Asia/Riyadh')->format('H:i');
    // return $now;
    return view('userSide.clinic_details',compact('categories','clinic','days','times','clinicAppointmentID','booking','now','time'));
}
}
