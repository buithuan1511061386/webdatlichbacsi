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

	    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data = News::find($id);
        $typeofnews = Typeofnews::all();
        //Để load khóa ngoại
        //Ví dụ
        //$data = Hospital::find($id);
        //$region = Region::where('id',$data->id_region)->get();
        //$data sẽ ra chi tiết bệnh viện đó, còn $region sẽ ra bệnh viện đó có miền gì
        //compact cả 2 return view('...',compact($data,$region));
        //khi do region bên view sẽ vào vòng lặp foreach in ra :D, nó sẽ load hết miền có id trùng với id_region của bệnh viện, có cả tên. có gì tui làm thử ùi tui hỏi ông. tks nhaok:D
        return view('backend.news.editnews',compact('data','typeofnews'));
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
        $data = News::find($id);
        $data->title = $req->title;
        $data->typeofnews_id = $req->typeofnews_id;
        $data->intro = $req->intro;
        $data->content = $req->content;
        $data->link = $req->link;

        if($req->hasFile('image'))
        {
            $image = $req->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/news/');
            $image->move ($destinationPath, $image_name);
            $data->image = 'images/news/'.$image_name;
        }
        $data->creator = $req->creator;
        $data->meta_desc = $req->meta_desc;
        $data->meta_key = $req->meta_key;

        $data->save();
        return redirect('admin/news')->with('status','Sửa thành công');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
     $data->delete();

     return redirect('admin/news')->with('status','Xóa thành công');
    }
}

?>