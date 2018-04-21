@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="/tags"><i class="fa fa-chevron-left"></i> Tags</a>
      </div>
    </div>
    <div style="margin: 16px"></div>
    <div class="row">
      <div class="col-lg-12">
        @include("inc.messages")
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h1>Add Tag</h1>
      </div>
    </div>
    {!! Form::open(["action" => "TagsController@store", "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", "", ["class" => "form-control", "placeholder" => "Produk Lokal"])}}
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
              <p class="text-muted">Tag dapat Anda gunakan untuk mengelompokan barang berdasarkan jenis tertentu. Contoh: mengelompokan baju berdasarkan jenis kainnya.</p>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-lg-12">
          <a href="/tags" class="btn btn-clear">Cancel</a>
          {{ Form::submit("Save Tag", ["class" => "btn btn-primary pull-right"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection