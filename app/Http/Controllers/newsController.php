<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $news = News::latest()->paginate(50);
        return view('news.news')->with('news' , $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('news.ncreate')->with('categories' , $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
           
             'title' => 'required',
             'content' => 'required',
             'category' => 'required'
        ]);

        $category = new News;
        $category->title = $request->input('title');
        $category->content = $request->input('content');
        $category->parent_cat = $request->input('category');

         if($request->hasFile('image'))
        {
            $file      = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $mimeType  = $file->getClientMimeType();
            $fileName  = $file->getClientOriginalName();
            $size      = $file->getClientSize();

            $path      = $file->storeAs('storage/avatar' , time() . '.' . $extension);
        }else
        {
            $path      = 'storage/avatar/no-image.png';
        } 

        $category->image = $path;


        $category->save();

        return redirect(route('news.index'))->with('msg','news create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);

        return view('news.nshow')->with('news' , $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::get();

        $editArray = array($news , $categories);

        return view('news.nedit')->with('editArray' , $editArray);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
           
             'title' => 'required',
             'content' => 'required',
             'category' => 'required'
        ]);

        $category = News::find($id);
        $category->title = $request->input('title');
        $category->content = $request->input('content');
        $category->parent_cat = $request->input('category');

         if($request->hasFile('image'))
        {
            $file      = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $mimeType  = $file->getClientMimeType();
            $fileName  = $file->getClientOriginalName();
            $size      = $file->getClientSize();

            $path      = $file->storeAs('storage/avatar' , time() . '.' . $extension);
        }else
        {
            $path      = 'storage/avatar/no-image.png';
        } 

        $category->image = $path;


        $category->save();

        return redirect(route('news.index'))->with('msg','news Edit success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = News::find($id);
        $category->destroy($id);

        return redirect(route('news.index'))->with('msg','Dleleted success');
    }
}
