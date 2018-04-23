<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorsController extends Controller{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $vendors = Vendor::orderBy("name", "asc")->paginate(10);
    return view("vendors.index")->with("vendors", $vendors);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view("vendors.create");
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

    $vendor = new Vendor;
    $vendor->name = $request->input("name");
    $vendor->description = $request->input("description");
    $vendor->save();

    return redirect("/vendors")->with("success", "Vendor created!");
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
    $vendor = Vendor::find($id);
    return view("vendors.edit")->with("vendor", $vendor);
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

    $vendor = Vendor::find($id);
    $vendor->name = $request->input("name");
    $vendor->description = $request->input("description");
    $vendor->save();

    return redirect("/vendors")->with("success", "Vendor udpated!");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
    $vendor = Vendor::find($id);
    $vendor->delete();
    return redirect("/vendors")->with("success", "Vendor deleted!");
  }
}
