<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Region;
use App\Department;
use App\Hospital;
use App\Typeofnews;
use Illuminate\Support\Facades\Hash;
use Mail;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $region = Region::all();
        // $hospital = Hospital::all();
        // $department = Department::all();
        // if($id==1){
        // $data = User::with('region','hospital','department')->get();
        // }
        // elseif($id==2){
        // $data = User::where('user_level_id',1)->with('region','hospital','department')->get();
        // }
         // elseif($id==3){
        // $data = User::where('user_level_id',2)->with('region','hospital','department')->get();
        // }
         // elseif($id==4){
        // $data = User::where('user_level_id',3)->with('region','hospital','department')->get();
        // }
        // else
            // "Không có nhé ^^";
        // return view('backend.user.users_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // if($id==1){
            // $region = Region::all();
            // $hospital = Hospital::all();
            // $department = Department::all();
            // return view('backend.user.addadmin',compact('region','hospital','department'));
        // }
        // elseif($id==2){
             // $region = Region::all();
            // $hospital = Hospital::all();
            // $department = Department::all();
         // return view('backend.user.adddoctor',compact('region','hospital','department'));
    // }
    // else
		if($id==3){
        $region = Region::all();
            $hospital = Hospital::all();
            $department = Department::all();
            $typeofnews= Typeofnews::all();
         return view('frontend.user.adduser',compact('region','hospital','department','typeofnews'));
    }
    else
        echo "không hợp lệ";
    }
       public function forgetpassword()
    {

        $region = Region::all();
            $hospital = Hospital::all();
            $department = Department::all();
            $typeofnews= Typeofnews::all();
         return view('frontend.user.forgetpassword',compact('region','hospital','department','typeofnews'));

    }
         public function getpassword(Request $request, $id)

    {


        $u = User::where('email',$request->email)->first();

        $d=['name'=>$u->name,'id'=>$u->id ];
        Mail::send('frontend.user.getpassword', $d, function ($message) use ($u) {
            $message->from('buithuan1511061386@gmail.com', 'An Thuan');

            $message->to($u->email, $u->name)->subject('Đây là mail đặt mới mật khẩu');
        });
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->get();
        $typeofnews= Typeofnews::all();
        return view('frontend.master.home',compact('region','hospital','department','user','typeofnews'));

    }
        public function setpassword(Request $request, $id){

        $data = User::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $typeofnews= Typeofnews::all();

        return view('frontend.user.setpassword1',compact('data','region','hospital','department','typeofnews'));
        }
        public function setpassword1(Request $request, $id){
             $data = User::find($id);
        $data->password = Hash::make($request->password);
        $data->save();
        $typeofnews= Typeofnews::all();
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->get();
        return view('frontend.master.home',compact('region','hospital','department','user','typeofnews'));


        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->birthday = $request->birthday;
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user/');
            $image->move ($destinationPath, $image_name);
            $data->image = 'images/user/'.$image_name;
        }
        $data->content = $request->content;
        $data->description = $request->description;
        $data->sex = $request->sex;
        $data->region_id = $request->region_id;
        $data->hospital_id = $request->hospital_id;
        $data->department_id = $request->department_id;
         $data->phone = $request->phone;
         $data->address = $request->address;
         $data->price = $request->price;
         $data->user_level_id = $request->user_level_id;
        $data->save();
        $u = User::where('email',$data->email)->first();
        $d=['name'=>$u->name,'id'=>$u->id, 'mail'=>$u->email ];
        Mail::send('frontend.user.verification', $d, function ($message) use ($u) {
            $message->from('buithuan1511061386@gmail.com', 'An Thuan');

            $message->to($u->email, $u->name)->subject('Đây là mail xác minh tài khoản');
        });
        if ($request->user_level_id==3)
        {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->get();
        $typeofnews= Typeofnews::all();
        return view('frontend.master.home',compact('region','hospital','department','user','typeofnews'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = User::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
		$typeofnews = Typeofnews::all();
        return view('frontend.user.view_user',compact('data','region','hospital','department','typeofnews'));
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
        $data = User::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $typeofnews= Typeofnews::all();
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('frontend.user.edituser',compact('data','region','hospital','department','typeofnews'));
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
        $data = User::find($id);
         $data->name = $req->name;
        $data->email = $req->email;
        $data->birthday = $req->birthday;
 if($req->hasFile('image'))
        {
            $image = $req->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user/');
            $image->move ($destinationPath, $image_name);
            $data->image = 'images/user/'.$image_name;
        }
        $data->content = $req->content;
        $data->description = $req->description;
        $data->sex = $req->sex;
        $data->region_id = $req->region_id;
        $data->hospital_id = $req->hospital_id;
        $data->department_id = $req->department_id;
         $data->phone = $req->phone;
         $data->address = $req->address;
         $data->price = $req->price;
         $data->user_level_id = $req->user_level_id;
        $data->save();

        $typeofnews= Typeofnews::all();
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->get();
        return view('frontend.master.home',compact('region','hospital','department','user','typeofnews'));

    }
    public function verification(Request $req, $id)
    {
        // dd($req->all());
        $data = User::find($id);
        $data->verification=1;
        $data->save();
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        $user = User::where('user_level_id',2)->get();
        return view('frontend.master.home',compact('region','hospital','department','user','typeofnews'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
