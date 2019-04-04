<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\User;
use App\Region;
use App\Department;
use App\Hospital;
use App\Typeofnews;
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
        $typeofnews= Typeofnews::all();
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
        return view('frontend.appointment.listappointment',compact('customer','doctor','region','hospital','department','user','data','typeofnews'));
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
    public function create(Request $request)
    {
        // $data = new appointment;
        // $data->customer_id = $request->customer_id;
        // $data->doctor_id = $request->doctor_id;
		// $data->date = $request->date;
		// $data->time = $request->time;
		 // $data->save();

        //return view('backend.region.region_list',compact('data'));
		$user = User::all();
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $result="";
        $doctor_id=$request->doctor_id;
        $customer_id=$request->customer_id;
        $date=$request->date;
        $time=$request->time;
        $typeofnews= Typeofnews::all();
    return view('frontend.appointment.addappointment',compact('user','request','region','hospital','department','typeofnews'));
    }
    public function add(Request $request)
    {
        $data = new Appointment;
        $data->customer_id = $request->customer_id;
        $data->doctor_id = $request->doctor_id;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->note = $request->note;
        $data->save();
        $typeofnews= Typeofnews::all();
        $customer = User::where('id',$data->customer_id)->first();
        $d=['date'=>$request->date,'time'=>$request->time];
        Mail::send('frontend.appointment.blanks', $d, function ($message) use ($customer) {
            $message->from('buithuan1511061386@gmail.com', 'An Thuan');

            $message->to($customer->email, $customer->name)->subject('Đây là mail thông báo lịch đã đặt');
        });
        return redirect('http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone='.$customer->phone.'&Content=Bạn đã đặt lịch vào ngày'.$request->date.' vào lúc '.$request->time.' &ApiKey=0E9D52615201246A6D9A64F12F5EAF&SecretKey=AB38FCAABD9876377B651269B0EB4A&SmsType=2&Brandname=QCAO_ONLINE');
        // $region = Region::all();
        // $hospital = Hospital::all();
        // $department = Department::all();
        // $result="";
        // $user = User::where('user_level_id',2)->get();
        // return view('frontend.master.home',compact('region','hospital','department','user','typeofnews'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Appointment::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $typeofnews= Typeofnews::all();
        $user = User::all();

        return view('frontend.appointment.viewappointment',compact('user','data','region','hospital','department','typeofnews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Khong vao dc route nay
        // dd($id);
        $data = Region::find($id);
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('backend.region.editregion',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // dd($request->all())
    //   $data = Region::find($id);
    //   $data->name = $request->get('name');
    //   $data->save();

    //   return redirect('admin/region');
    // }
    public function update_post(Request $req, $id)
    {
        // dd($req->all());

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Appointment::find($id);
        $c= User::where('id',$data->customer_id)->first();
        $d= User::where('id',$data->doctor_id)->first();
        $data->delete();
         return redirect('http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone='.$c->phone.'&Content=Xin loi lịch hen da bi huy vao ngay'.$data->date.' vào lúc '.$data->time.' cua bac si '.$d->name.'Xin thong cam va dat lai lich khac.'.' &ApiKey=0E9D52615201246A6D9A64F12F5EAF&SecretKey=AB38FCAABD9876377B651269B0EB4A&SmsType=2&Brandname=QCAO_ONLINE')->back();


    }
}
