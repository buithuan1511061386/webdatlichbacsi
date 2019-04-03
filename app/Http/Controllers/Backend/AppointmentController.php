<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\User;
use App\Region;
use App\Department;
use App\Hospital;
use Mail;
use Auth;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $customer = User::all();
        $doctor = User::all();
        $user = User::all();
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        if(Auth::user()->user_level_id==1)
        {
            $data = Appointment::all();
        }
        elseif(Auth::user()->user_level_id==2)
        {
            $data = Appointment::where('doctor_id',$id)->with('customer','doctor')->get();
        }
        elseif(Auth::user()->user_level_id==3)
        {
             $data = Appointment::where('customer_id',$id)->with('customer','doctor')->get();
        }
        return view('backend.appointment.listappointment',compact('customer','doctor','region','hospital','department','user','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // return view('backend.region.addregion');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $data = Appointment::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $user = User::all();

        return view('backend.appointment.viewappointment',compact('user','data','region','hospital','department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = Appointment::find($id);
     $data->delete();
      $customer = User::all();
        $doctor = User::all();
        $user = User::all();
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        if(Auth::user()->user_level_id==1)
        {
            $data = Appointment::all();
        }
        elseif(Auth::user()->user_level_id==2)
        {
            $data = Appointment::where('doctor_id',$id)->with('customer','doctor')->get();
        }
        elseif(Auth::user()->user_level_id==3)
        {
             $data = Appointment::where('customer_id',$id)->with('customer','doctor')->get();
        }
        return view('backend.appointment.listappointment',compact('customer','doctor','region','hospital','department','user','data'));

    }
}
