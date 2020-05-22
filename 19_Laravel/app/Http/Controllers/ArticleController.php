<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ArticleRequest;
use App\Http\Exports\ArticleExport;
use App\Imports\ArticlesImport;

use App\Article;
use App\User;
use App\Category;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Article::paginate(20);
        return view('articles.index')->with('arts', $arts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role', '=', 'Customer')->get();
        $cats = Category::all();

        return view('articles.create')
               ->with('users', $users)
               ->with('cats', $cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $art = new Article;
        $art->title = $request->title;
        $art->content = $request->content;
        $art->user_id = $request->user_id;
        $art->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $art->image = "imgs/".$file;
        }

        if($art->save()){
            return redirect('articles')->with('message', 'El artículo: '.$art->title.' fué adicionado con Éxito!');
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
        $art = Article::find($id);
        return view('articles.show')->with('art', $art);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Article::find($id);
        $users = User::where('role', '=', 'Customer')->get();
        $cats = Category::all();
        return view('articles.edit')
               ->with('art', $art)
               ->with('users', $users)
               ->with('cats', $cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $art = Article::find($id);
        $art->title = $request->title;
        $art->content = $request->content;
        $art->user_id = $request->user_id;
        $art->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $art->image = "imgs/".$file;
        }

        if($art->save()){
            return redirect('articles')->with('message', 'El artículo: '.$art->title.' fué modificado con Éxito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Article::find($id);
        if ($art->delete()) {
            return redirect('articles')->with('message', 'El artículo '.$art->title.' fué eliminado con éxito!');
        }
    }

    public function search(Request $request){
        //Scope
        $arts = Article::names($request->q)->orderBy('id', 'ASC')->paginate(20);
        return view('articles.search')->with('arts', $arts);
    }

    public function pdf(){
        //dd('Descargar pdf');
        $arts = Article::all();
        $pdf = \PDF::loadView('articles.pdf', compact('arts'));
        set_time_limit(0);
        return $pdf->download('allarticles.pdf');
    }

    public function excel(){
        return \Excel::download(new ArticleExport, 'allarticles.xlsx');
    }

    public function import(Request $request) {
        // $this->validate($request, [
        //     'file' => 'required|file|mimes:xls, xlsx'
        // ]);

        $file = $request->file('file');
        \Excel::import(new ArticlesImport, $file);
        return redirect()->back()->with('message', 'Los artículos se importaron con éxito!');
    }
}
