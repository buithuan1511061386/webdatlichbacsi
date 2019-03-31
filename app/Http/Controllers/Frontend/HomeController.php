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
}

?>
