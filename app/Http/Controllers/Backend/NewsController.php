<?php 

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Typeofnews;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeofnews = Typeofnews::all();
        $data = News::with('typeofnews')->get();
        return view('backend.news.news_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeofnews = Typeofnews::all();
        return view('backend.news.addnews',compact('typeofnews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new News;
        $data->title = $request->title;
        $data->typeofnews_id = $request->typeofnews_id;
        $data->intro = $request->intro;
        $data->content = $request->content;
        $data->link = $request->link;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/news/');
            $image->move ($destinationPath, $image_name);
            $data->image = 'images/news/'.$image_name;
        }
        $data->creator = $request->creator;
        $data->meta_desc = $request->meta_desc;
        $data->meta_key = $request->meta_key;
        $data->save();
         return redirect('admin/news')->with('status','Thêm thành công');
    }



?>