<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Clinic;
use App\Models\SubCategory;
use Illuminate\Http\Request;
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
}
