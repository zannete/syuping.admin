@extends("layouts.app")

@section("content")
  <div class="container">
    {!! Form::open(["action" => "ProductsController@store", "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-12">
          <a href="/products"><i class="fa fa-chevron-left"></i> Products</a>
        </div>
      </div>
      <div style="margin: 16px"></div>
      <div class="row">
        <div class="col-lg-12">
          <h1 class="pull-left">Add Product</h1>
          {{ Form::submit("Add Product", ["class" => "btn btn-primary pull-right"]) }}
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          @include("inc.messages")
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <div class="form-group">
                    {{ Form::label("name", "Name") }}
                    {{ Form::text("name", "", ["class" => "form-control", "placeholder" => "Baju Lengan Panjang"]) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label("description", "Description") }}
                    {{ Form::textarea("description", "", ["class" => "form-control", "rows"=> "5"]) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <h5>Images</h5>
                    </div>
                    <div class="col-lg-6 text-right">
                      <a href="#" style="font-size: 1.25rem">Upload Image</a>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 240px">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <h5>Pricing</h5>
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="input-group">
                        <div class="input-group-addon">Rp</div>
                        {{ Form::text("price", "" ,["class" => "form-control", "placeholder" => "0"]) }}
                      </div>
                    </div>
                  </div>
                  <br/>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        {{ Form::checkbox("taxable") }} Barang kena pajak.
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <h5>Inventory</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        {{ Form::label("sku", "SKU (Stock Keeping Unit)") }}
                        {{ Form::text("sku", "", ["class" => "form-control"]) }}
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        {{ Form::label("barcode", "Barcode (ISBN, UPC, GITN, etc.)") }}
                        {{ Form::text("barcode", "", ["class" => "form-control"]) }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <h5>Shipping</h5>
                  <hr style="margin-left: -25px; margin-right: -25px"/>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        {!! Form::checkbox("isPhysicalProduct", "", false, ["id" => "isPhysicalProduct"]) !!} Ini adalah produk fisik.
                      </label>
                    </div>
                  </div>
                  <div id="physicalProductContainer">
                    <hr style="margin-left: -25px; margin-right: -25px"/>
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="form-group">
                          {{ Form::label("weight", "Berat") }}
                          <label for="txtWeight">Berat</label>
                          <div class="input-group">
                            {{ Form::text("weight", "", ["class" => "form-control", "placeholder" => "0,0"]) }}
                            <span class="input-group-addon">
                              kg
                            </span>
                          </div>
                          <small class="text-muted">Digunakan untuk kalkulasi pengiriman</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="notPhysicalProductContainer">
                    <hr style="margin-left: -25px; margin-right: -25px"/>
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="text-muted">Customer tidak akan memasukan alamat pengiriman dikarenakan barang yang dijual bukan barang fisik.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body" style="padding-bottom:0px">
                  <div class="row">
                    <div class="col-lg-6">
                      <h5>Variants</h5>
                    </div>
                    <div class="col-lg-6 text-right">
                      <a href="#" style="text-size: 1.25rem">Tambah variant</a>
                    </div>
                  </div>
                  <p>Tambahkan variant jika Anda memiliki banyak jenis barang, seperti warna atau ukuran.</p>
                  <div class="row" style="background: #f9fafb; margin-left: -25px; margin-right: -25px; padding-left: 16px; padding-right: 16px; padding-top: 25px; padding-bottom: 25px;">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            {{ Form::label("option", "Option") }}
                            {{ Form::text("option", "", ["class" => "form-control", "placeholder" => "Size"]) }}
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="form-group">
                            {{ Form::label("optionValues", "Option Values") }}
                            {{ Form::select("optionValues", [], null, ["id" => "optionValues", "class" => "select2-tags", "multiple" => true]) }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <h5>Publish</h5>
                  <dl class="dl-horizontal">
                    <dt style="width: 90px">Status:</dt>
                    <dd style="margin-left: 100px">Draft <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                    {{ Form::hidden("status", "Draft") }}
                    <dt style="width: 90px">Visibility:</dt>
                    <dd style="margin-left: 100px">Public <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                    {{ Form::hidden("visibilty", "Public") }}
                    <dt style="width: 90px">Publish Date:</dt>
                    <dd style="margin-left: 100px">Sekarang juga. <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                    {{ Form::hidden("publishedDate", "now") }}
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel" style="background: #f9fafb">
                <div class="panel-body">
                  <h5>Organization</h5>
                  <div class="form-group">
                    {{ Form::label("category", "Product Category") }}
                    {{ Form::select("category", ["router" => "Router", "camera" => "Camera", "personalPC" => "Personal PC"], null, ["class" => "form-control selectpicker"]) }}
                  </div>
                  <div class="form-group">
                    {{ Form::label("vendor", "Vendor") }}
                    {{ Form::select("vendor", ["apple" => "Apple", "google" => "Google", "asus" => "Asus", "huawei" => "Huawei"], null, ["class" => "form-control selectpicker"]) }}
                  </div>
                  <hr style="margin-left: -25px; margin-right: -25px;"/>
                  <div class="form-grouop">
                    {{ Form::label("collection", "Collection") }}
                    {{ Form::select("collection", ["summerCollection" => "Summer Collection", "winterCollection" => "Winter Collection"], null, ["class" => "form-control selectpicker"]) }}
                    <br/><br/>
                    <p>Tambahkan produk Anda ke koleksi agar customer lebih mudah mencari barang Anda</p>
                  </div>
                  <hr style="margin-left: -25px; margin-right: -25px"/>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        {{ Form::label("tags", "Tags") }}
                      </div>
                      <div class="col-lg-6 text-right">
                        <a href="#">Lihat semua tag</a>
                      </div>
                    </div>
                    {{ Form::select("tags", [], null, ["class" => "select2-tags", "id" => "tags"])}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-lg-12">
          <a href="/products" class="btn">Cancel</a>
          {{ Form::submit("Add Product", ["class" => "btn btn-primary pull-right"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection

@section("additionalJS")
  <script>
    $(document).ready(function(){
      function onCbPhysicalProductClick(){
        if(this.checked){
          $("#notPhysicalProductContainer").hide();
          $("#physicalProductContainer").show();
        }else{
          $("#notPhysicalProductContainer").show();
          $("#physicalProductContainer").hide();
        }
      }
  
      $("#notPhysicalProductContainer").hide();
      $("#isPhysicalProduct").on("change", onCbPhysicalProductClick)
      $("#isPhysicalProduct").prop("checked", true);

      $('.selectpicker').selectpicker({
        style: 'btn-default',
        liveSearch: true
      });

      $("#optionValues").select2({tags: true, tokenSeparators: [", ", " "], placeholder: "S, M, L, XL, XXL"})
      $("#tags").select2({tags: true, tokenSeparators: [", ", " "], placeholder: "Jaringan, modul, keyboard, mouse"})

    })

  </script>
@endsection