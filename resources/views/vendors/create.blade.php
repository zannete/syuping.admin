@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="/vendors"><i class="fa fa-chevron-left"></i> Vendors</a>
      </div>
    </div>
    <div style="margin: 16px;"></div>
    <h1>Create New Vendor</h1>
    <div class="row">
      <div class="col-lg-12">
        @include("inc.messages")
      </div>
    </div>
    {!! Form::open(["action" => "VendorsController@store", "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", "", ["class" => "form-control", "placeholder" => "Apple, Google, Asus, or Huawei"])}}
              </div>
              <div class="form-group">
                {{ Form::label("description", "Description") }}
                {{ Form::textarea("description", "", ["class" => "form-control", "rows" => 5]) }}
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
        <div class="col-lg-12">
          <a href="/vendors" class="btn">Cancel</a>
          {{ Form::submit("Add Vendor", ["class" => "btn btn-primary pull-right"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection