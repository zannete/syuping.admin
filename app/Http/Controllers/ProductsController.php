<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    return view("products.index");
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
    return view("products.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    $this->validate($request, [
      "name" => "required",
      "description" => "required",
      "price" => "required",
      "sku" => "required",
      "barcode" => "required",
      "option" => "required",
      "optionValues" => "required",
      "status" => "required",
      "visibility" => "required",
      "publishedDate" => "required"
    ]);

    $product = new Product;
    $product->name = $request->input("name");
    $product->price = $request->input("price");
    $product->sku = $request->input("sku");
    $product->barcode = $request->input("barcode");
    $product->option = $request->input("option");
    $product->optionValues = $request->input("optionValues")
    $product->status = $request->input("status");
    $product->visibility = $request->input("visibility");
    $product->publishedDate = date("c");
    $product->save();

    return redirect("/products")->with("success", "Product added!");
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
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id){
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id){
  }
}
