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
        $data = Doctortime::find($id);
        // $region = Region::all();
        // $hospital = Hospital::all();
        // $department = Department::all();
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('backend.doctortime.editdoctortime',compact('data'));
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
        $data = Doctortime::find($id);
         $data->date = $req->date;
        $data->time_start = $req->time_start;
        $data->time_end = $req->time_end;
        $data->save();
        return redirect('admin/doctortime/list')->with('status','Sửa thành công');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Doctortime::find($id);
     $data->delete();
     return redirect('admin/doctortime/list')->with('status','Xóa thành công');
    }
}
?>