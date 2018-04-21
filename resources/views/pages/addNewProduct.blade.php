@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="/products"><i class="fa fa-chevron-left"></i> Products</a>
      </div>
    </div>
    <div style="margin: 16px"></div>
    <div class="row">
      <div class="col-lg-12">
        <h1>Add Product</h1>
      </div>
    </div>
    <form>
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-body">
                  <div class="form-group">
                    <label for="txtTitle">Title</label>
                    <input type="text" class="form-control" id="txtTitle" placeholder="Baju Lengan Panjang"/>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="5"></textarea>
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
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="0">
                      </div>
                    </div>
                  </div>
                  <br/>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"/> Barang Kena Pajak
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
                        <label for="txtSKU">SKU (Stock Keeping Unit)</label>
                        <input type="text" class="form-control" id="txtSKU"/>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="txtBarcode">Barcode (ISBN, UPC, GITN, etc.)</label>
                        <input type="text" class="form-control" id="txtBarcode"/>
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
                        <input id="cbPhysicalProduct" type="checkbox" checked/> Ini adalah produk fisik.
                      </label>
                    </div>
                  </div>
                  <div id="physicalProductContainer">
                    <hr style="margin-left: -25px; margin-right: -25px"/>
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="form-group">
                          <label for="txtWeight">Berat</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="txtWeight" placeholder="0,0"/>
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
                            <label for="txtOption">Option</label>
                            <input type="text" class="form-control" id="txtOption" placeholder="Size"/>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label for="txtOptionValue">Option Values</label>
                            <input type="text" class="form-control" id="txtOptionValue" placeholder="Separate options with a comma"/>
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
                    <dt style="width: 90px">Visibility:</dt>
                    <dd style="margin-left: 100px">Public <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                    <dt style="width: 90px">Publish Date:</dt>
                    <dd style="margin-left: 100px">Sekarang juga. <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
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
                    <label for="txtProductType">Product Type</label>
                    <select class="form-control selectpicker">
                      <option>Router</option>
                      <option>Camera</option>
                      <option>Personal PC</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="txtVendor">Vendor</label>
                    <select class="form-control selectpicker">
                      <option>Apple</option>
                      <option>Google</option>
                      <option>Asus</option>
                      <option>Huawei</option>
                    </select>
                  </div>
                  <hr style="margin-left: -25px; margin-right: -25px;"/>
                  <div class="form-grouop">
                    <label for="txtCollection">Collection</label>
                    <select class="form-control selectpicker">
                      <option>Summer Collection</option>
                      <option>Winter Collection</option>
                    </select>
                    <br/><br/>
                    <p>Tambahkan produk Anda ke koleksi agar customer lebih mudah mencari barang Anda</p>
                  </div>
                  <hr style="margin-left: -25px; margin-right: -25px"/>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="txtTags">Tags</label>
                      </div>
                      <div class="col-lg-6 text-right">
                        <a href="#">Lihat semua tag</a>
                      </div>
                    </div>
                    <select class="select2-tags" multiple>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
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
  
      $("#cbPhysicalProduct").on("click", onCbPhysicalProductClick)
      $("#cbPhysicalProduct").prop("checked", true);

      $('.selectpicker').selectpicker({
        style: 'btn-default',
        liveSearch: true
      });

      $('.select2-tags').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: "Jaringan, modul, keyboard, mouse"
      });

    })

  </script>
@endsection