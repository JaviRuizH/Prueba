<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Publication;
use App\Category;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications= DB::table('publications')
        ->join('categories as ct','ct.id','=','publications.id_category')->select("*")->get();
        return $publications;
    }

    public function list()
    {
        $publications= DB::table('publications')
        ->join('categories as ct','ct.id','=','publications.id_category')->select("*")->get();
        return view('publications.index')->with('data',$publications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('publications.create')->with('data',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publications = new Publication();
        $publications->id_category = $request->category;
        $publications->title = $request->title;
        $publications->description = $request->description;
        $publications->save();
        return redirect('home/list_publication');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publications = Publication::where('id_category',$id)->select("*")->get();
        return  $publications;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
