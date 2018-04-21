<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $tags = Tag::orderBy("created_at", "desc")->paginate(10);
    return view("tags.index")->with("tags", $tags);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view("tags.create");
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

    $tag = new Tag;
    $tag->name = $request->input("name");
    $tag->description = $request->input("description");
    $tag->save();

    return redirect("/tags")->with("success", "Tag created!");
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
    $tag = Tag::find($id);
    return view("tags.edit")->with("tag", $tag);
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

    $tag = Tag::find($id);
    $tag->name = $request->input("name");
    $tag->description = $request->input("description");
    $tag->save();

    return redirect("/tags")->with("success", "Tag updated!");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    $tag = Tag::find($id);
    $tag->delete();
    return redirect("/tags")->with("success", "Tag deleted!");
  }
}
