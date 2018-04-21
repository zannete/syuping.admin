@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="/collections"><i class="fa fa-chevron-left"></i> Collections</a>
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
        <h1>Add Collection</h1>
      </div>
    </div>
    {!! Form::open(["action" => "CollectionsController@store", "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", "", ["class" => "form-control", "placeholder" => "Summer Collection"]) }}
              </div>
              <div class="form-group">
                {{ Form::label("description", "Description") }}
                {{ Form::textarea("description", "", ["class" => "form-control", "rows" => 5]) }}
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-body">
              <h5>Select products</h5>
              <p class="text-muted">Anda akan dapat menambahkan barang setelah menyimpan koleksi</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel">
            <div class="panel-body">
              <h5>Publish</h5>
              <dl class="dl-horizontal">
                <dt style="width: 90px">Status:</dt>
                <dd style="margin-left: 100px">Draft <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                {{ Form::hidden("status", "Draft") }}
                <dt style="width: 90px">Visibility:</dt>
                <dd style="margin-left: 100px">Public <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                {{ Form::hidden("visibility", "Public") }}
                <dt style="width: 90px">Publish Date:</dt>
                <dd style="margin-left: 100px">Sekarang juga. <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                {{ Form::hidden("publishedDate", "now") }}
              </dl>
            </div>
          </div>
          <div class="panel">
            <div class="panel-body">
              <h5>Collection image</h5>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-lg-12">
          <a href="/collections" class="btn">Cancel</a>
          {{ Form::submit("Add Collection", ["class" => "btn btn-primary pull-right"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection