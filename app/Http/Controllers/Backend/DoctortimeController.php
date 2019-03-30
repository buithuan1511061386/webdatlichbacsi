<?php 

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctortime;
use App\User;
use Auth;

class DoctortimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctortime::where('user_id', Auth::user()->id)->with('user')->get();
        return view('backend.doctortime.doctortime_list',compact('data'));
    }
      public function showall()
    {
        $data = Doctortime::with('user')->get();
        return view('backend.doctortime.doctortime_list',compact('data'));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('backend.doctortime.adddoctortime');

    }
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new Doctortime;
        $data->user_id = $request->user_id;
        $data->date = $request->date;
        $data->time_start = $request->time_start;
        $data->time_end = $request->time_end;
        $data->save();
         return redirect('admin/doctortime/list')->with('status','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $data = User::find($id);
        // $region = Region::all();
        // $hospital = Hospital::all();
        // $department = Department::all();
        // return view('backend.user.view_user',compact('data','region','hospital','department'));
    }


?>