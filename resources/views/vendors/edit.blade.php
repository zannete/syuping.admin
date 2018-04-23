@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="/vendors"><i class="fa fa-chevron-left"></i> Vendors</a>
      </div>
    </div>
    <div style="margin: 16px;"></div>
    <h1>Update Vendor</h1>
    <div class="row">
      <div class="col-lg-12">
        @include("inc.messages")
      </div>
    </div>
    {!! Form::open(["action" => ["VendorsController@update", $vendor->id], "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", $vendor->name, ["class" => "form-control", "placeholder" => "Apple, Google, Asus, or Huawei"])}}
              </div>
              <div class="form-group">
                {{ Form::label("description", "Description") }}
                {{ Form::textarea("description", $vendor->description, ["class" => "form-control", "rows" => 5]) }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel" style="background: #f9fafb">
            <div class="panel-body">
              <p class="text-muted">Vendor berbeda dengan suplier. Biasanya, vendor identik dengan merk dari produk yang Anda jual. Contoh: Apple, Google, dan Asus</p>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-lg-6">
          <a href="/vendors" class="btn">Cancel</a>
        </div>
        <div class="col-lg-6 text-right">
          {{ Form::hidden("_method", "PUT") }}
          {{ Form::button("Delete Vendor", ["class" => "btn btn-danger", "data-toggle" => "modal", "data-target" => "#modalDelete"])}}
          {{ Form::submit("Update Vendor", ["class" => "btn btn-primary"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
  @include("inc.modalDelete", ["controller" => "VendorsController@destroy", "id" => $vendor->id, "name" => $vendor->name])
@endsection