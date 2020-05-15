<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Maatwebsite\Excel\Facades\Excel;

//Export
use App\Http\Exports\CategoryExport;

//Import
use App\Imports\CategoriesImport;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(20);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
       
        if($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $category->image = "imgs/".$file;
        }

        if($category->save()) {
            return redirect('categories')->with('message', 'La categoría: '.$category->name.' fué adicionada con éxito');
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
        $category = Category::findOrFail($id);
        return view('categories.show')->with('category', $category);
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
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;

        if($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $file);
            $category->image = "imgs/".$file;
        }

        if($category->save()) {
            return redirect('categories')->with('message', 'La categoría: '.$category->name.' fué modificada con éxito');
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
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->back()->with('message', 'La categoría '.$category->name.' fue eliminada con éxito!');
        }
    }

    public function search(Request $request){
        //Scope
        $categories = Category::names($request->q)->orderBy('id', 'ASC')->paginate(20);
        return view('categories.search')->with('categories', $categories);
    }

    public function pdf(){
        //dd('Descargar pdf');
        $categories = Category::all();
        $pdf = \PDF::loadView('categories.pdf', compact('categories'));
        set_time_limit(0);
        return $pdf->download('allcategories.pdf');
    }

    public function excel(){
        return \Excel::download(new CategoryExport, 'allcategories.xlsx');
    }

    public function import(Request $request) {
        // $this->validate($request, [
        //     'file' => 'required|file|mimes:xls, xlsx'
        // ]);

        $file = $request->file('file');
        \Excel::import(new CategoriesImport, $file);
        return redirect()->back()->with('message', 'Las categorías se importaron con éxito!');
    }
}
