<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth', ['except' => ['welcome', 'artsbycat']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'Admin'){
            return view('dashboard-admin');
        } else if (Auth::user()->role == 'Editor'){
            return view('dashboard-editor');
        } else {
            return redirect('');
        }
    }

    public function welcome(){
        $sliders = Article::where('slider', '=', 1)->get();
        $cats = Category::all();
        $arts = Article::all();
        return view('welcome')->with('sliders', $sliders)
                              ->with('cats', $cats)
                              ->with('arts', $arts);
    }

    public function artsbycat(Request $request){
        if ($request->idcat == 0) {
            //All Categories
            $cats = Category::all();
            $arts = Article::all();
            return view('artsbycat')->with('cats', $cats)
                                    ->with('arts', $arts);
        }else{
            //Art by Cat
            $cat = Category::where('id', '=', $request->idcat)->first();
            $arts = Article::where('category_id', '=', $request->idcat)->get();
            return view('artsbycat')->with('cat', $cat)
                                    ->with('arts', $arts);
        }
    }
}
