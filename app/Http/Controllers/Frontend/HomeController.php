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
}

?>