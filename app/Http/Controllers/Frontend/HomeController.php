<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\User;
use App\Hospital;
use App\Typeofnews;
use App\News;
use App\Department;
use App\Doctortime;
use App\Appointment;
use DateTime;
use DateInterval;
use DatePeriod;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$data = Region::all();
        return view('backend.region.region_list',compact('data'));*/
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->get();
        $typeofnews= Typeofnews::all();
        return view('frontend.master.home',compact('region','hospital','department','user', 'typeofnews'));
    }
	public function about()
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        return view('frontend.home.about',compact('region','hospital','department','typeofnews'));
    }
	public function gallery()
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        return view('frontend.home.gallery',compact('region','hospital','department','typeofnews'));
    }
        public function newlist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews = Typeofnews::all();
        $news = News::where('typeofnews_id',$request->id)->paginate(2);
        return view('frontend.home.newlist',compact('region','hospital','department','user','request','typeofnews','news'));
    }
        public function news()
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews = Typeofnews::all();
        return view('frontend.home.news',compact('region','hospital','department','typeofnews'));
    }

	public function regionlist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $user = User::where('user_level_id',2)->where('region_id',$request->id)->paginate(2);
        $typeofnews= Typeofnews::all();
        return view('frontend.home.regionlist',compact('region','hospital','department','user','request', 'typeofnews'));
    }

	public function hospitallist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        $user = User::where('user_level_id',2)->where('hospital_id',$request->id)->paginate(2);

        return view('frontend.home.hospitallist',compact('region','hospital','department','user','request','typeofnews'));
    }
	     public function departmentlist(Request $request)
    {
        $region= Region::all();
        $hospital= Hospital::all();
        $department= Department::all();
        $typeofnews= Typeofnews::all();
        $user = User::where('user_level_id',2)->where('department_id',$request->id)->paginate(2);

        return view('frontend.home.departmentlist',compact('region','hospital','department','user','request','typeofnews'));
    }
    public function show($id)
    {
        //Lấy dữ kiện
        $data = User::find($id);
        $region = Region::all();
        $hospital = Hospital::all();
        $department = Department::all();
        $appointment = Appointment::where('doctor_id',$id)->get();
        $doctortime =Doctortime::where('user_id',$id)->get();
        $user = User::where('user_level_id',2)->get();
        $typeofnews= Typeofnews::all();
        //Lấy ngày giờ bác sĩ
        $array = array();
        foreach($doctortime as $item) {
            // $begin =new DateTime($item->time_start);
            $date = date('Y-m-d',strtotime("$item->date"));
            $begin = DateTime::createFromFormat('Y-m-d H:i:s', "$date $item->time_start");
            $end = DateTime::createFromFormat('Y-m-d H:i:s', "$date $item->time_end");
            $interval = DateInterval::createFromDateString('30 min');
            $timesDate = new DatePeriod($begin, $interval, $end);
            array_push($array,$timesDate);
        }
        $appointments = array();
        if($appointment != null){
            foreach($appointment as $day){
                $getDay = date('Y-m-d', strtotime("$day->date"));
                $datetime = date('Y-m-d H:i:s', strtotime("$getDay $day->time"));
                array_push($appointments,$datetime);
            }
        }
        $doctor = array();
        foreach($array as $timesDate){
            foreach($timesDate as $value){
                $item = $value->format('Y-m-d H:i:s');
                array_push($doctor,$item);
            }
        }
        $diff1 = array_diff($appointments,$doctor);
        $diff2 = array_diff($doctor,$appointments);
        $times = array_merge($diff1,$diff2);
        return view('frontend.home.doctordetail',compact('data','region','hospital','department','user','doctortime', 'typeofnews','times'));
    }

}

?>
