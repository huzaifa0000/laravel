<?php

namespace App\Http\Controllers;

use App\Models\catogory;
use Illuminate\Http\Request;

class CatogoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcategory()
    {
        return view('add_category');
    }
    public function addcategorypost(Request $req)
    {
        $catogories=new category();
        $category->category_name=$req->category_name;
        $category->save();
        return redirect('showcategory');
    }

    

    public function showcategoryfunc()
    {
        $category=category::all();
        return view ('category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catogory  $catogory
     * @return \Illuminate\Http\Response
     */
    public function show(catogory $catogory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catogory  $catogory
     * @return \Illuminate\Http\Response
     */
    public function edit(catogory $catogory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catogory  $catogory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catogory $catogory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catogory  $catogory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catogory $catogory)
    {
        //
    }
}
