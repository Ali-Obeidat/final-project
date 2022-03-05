<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Clinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
       $clinics = Clinic::all();
        // return $categories;
        return view('admin.admin.create',compact('clinics'));
    }
    public function store(Request $request)
    {
        $input= $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'clinic'=> 'required',
            
        ]);
        // return $input['name'];

        $admin= Admin::create([
            'name'=>$input['name'],
            'email'=>$input['email'],
            'password'=>Hash::make( $input['password']),
        ]);
        $admin->clinics()->attach($input['clinic']);

        session()->flash('admin_create_massage','Admin was created');
        return redirect(route('admin.showAdmin'));
    }
    public function showAdmin()
    {
        
        $admins = Admin::with('clinics')->where('name', '!=', 'Admin')->get();
        // return $admins;
        return view('admin.admin.index',compact('admins'));
    }


     public function edit($id)
    {
       $admin = Admin::findOrFail($id);
       $clinics = Clinic::all();
        
        //   return $admin->clinics[0]->id;
        return view('admin.admin.edit',compact('admin','clinics'));
    }
    public function update(Request $request, $id)
    {
        // return $request;
        $input= $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            
            
        ]);
        // return $input;
        // return $input['name'];
        $admin = Admin::findOrFail($id);
        // return $admin->clinics[0]->id;
        $admin->update($input);
        $admin->clinics()->detach($admin->clinics[0]->id);
        $admin->clinics()->attach($request['clinic']);

        session()->flash('admin_update_massage','Admin was updated');
        return redirect(route('admin.showAdmin'));
    }
     public function destroy($id)
    {
       $admin = Admin::findOrFail($id);
       $admin-> delete();
       Session()->flash('massage','Admin was deleted');
       
        return back();
    //    return $admin;
    }
}
