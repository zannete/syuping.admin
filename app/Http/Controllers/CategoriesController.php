<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $categories = Category::orderBy("name", "asc")->paginate(10);
    return view("categories.index")->with("categories", $categories);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view("categories.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    $this->validate($request, [
      "name" => "required"
    ]);

    $category = new Category;
    $category->name = $request->input("name");
    $category->description = $request->input("description");
    $category->save();

    return redirect("/categories")->with("success", "Category created!");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id){
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $category = Category::find($id);
    return view("categories.edit")->with("category", $category);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id){
    $this->validate($request, [
      "name" => "required"
    ]);

    $category = Category::find($id);
    $category->name = $request->input("name");
    $category->description = $request->input("description");
    $category->save();

    return redirect("/categories")->with("success", "Category updated!");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    $category = Category::find($id);
    $category->delete();
    return redirect("/categories")->with("success", "Category deleted!");
  }
}
