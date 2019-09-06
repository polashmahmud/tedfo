<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);

        return view('categories.index', compact('categories'));
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
    public function store(CategoriRequest $request)
    {
        Category::create($request->all());

        return back()->with('success', 'Categories Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function show(Categori $categori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categori = Category::findOrFail($id);
        $categories = Category::latest()->paginate(10);
        return view('categories.edit', compact('categories', 'categori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriRequest $request, $id)
    {
        $categori = Category::findOrFail($id);
        $categori->title = $request->title;
        $categori->save();

        return back()->with('success', 'Categories Edit Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::deleted($id);
        return back()->with('success', 'Categories Delete Successfully!');
    }
}
