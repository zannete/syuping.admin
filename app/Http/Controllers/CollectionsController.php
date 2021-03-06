<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionsController extends Controller{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $collections = Collection::orderBy("created_at", "desc")->paginate(10);
    return view("collections.index")->with("collections", $collections);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view("collections.create");
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

    $collection = new Collection;
    $collection->name = $request->input("name");
    $collection->description = $request->input("description");
    $collection->status = $request->input("status");
    $collection->visibility = $request->input("visibility");
    $collection->publishedDate = date("c");
    $collection->save();

    return redirect("/collections")->with("success", "Collection created!");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id){
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $collection = Collection::find($id);
    return view("collections.edit")->with("collection", $collection);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id){
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    $collection = Collection::find($id);
    $collection->delete();
    return redirect("/collections")->with("success", "Collection deleted!");
  }
}
