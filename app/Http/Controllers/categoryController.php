<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
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
        $categories = Category::latest()->paginate(50);
        return view('category.category')->with('categories' , $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.ccreate');
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
           
             'name' => 'required',
             'description' => 'required',
        ]);

        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect(route('category.index'))->with('msg','category create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $category = Category::find($id);
        return view('category.cshow')->with('category' , $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.cedit')->with('category' , $category);
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
           
             'name' => 'required',
             'description' => 'required',
        ]);



        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect(route('category.index'))->with('msg','category edit success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->destroy($id);

        return redirect(route('category.index'))->with('msg','Dleleted success');
    }
}
