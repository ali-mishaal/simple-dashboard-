<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\User;
use Auth;
use Hash;


class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	$category_count = Category::count();
    	$news_count = News::count();
    	return view('dashboard', compact('category_count','news_count'));
    }

    public function setting(){
    	return view('setting');
    }


    public function search(Request $request){

        $data = $request->get('search');
        $resultsCat = Category::where('name' , 'like' ,'%'.$data.'%')->paginate(50);
        $results_news = News::where('title' , 'like' ,'%'.$data.'%')->paginate(50);        

        return view('search' , ['resultsCat' => $resultsCat ,'results_news' => $results_news]);
        
    }

    public function updatePass()
    {
        return view('updatePass'); 
    }

    public function update_pass(Request $request)
    {
      $this->validate($request , 
        [
          'cr-password'=>'required',
          'nw-password'=>'required:confirmed',
          'cn-password'=>'required'
        ]);

       $user = User::find(Auth::user()->id);
       $user_pass = $user->password;
       $input_pass = $request->input('cr-password');
       if(Hash::check($input_pass , $user_pass))
       {
         $user->password = Hash::make($request->input('nw-password'));
         $user->save();

         return redirect(route('setting'))->with('success-setting' , 'password updated success');
       }else
       {
         return redirect(route('setting'))->with('error-setting' , 'password updated failed');
       }
    }
}
