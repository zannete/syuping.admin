@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="/categories"><i class="fa fa-chevron-left"></i> Categories</a>
      </div>
    </div>
    <div style="margin: 16px;"></div>
    <h1>Create New Category</h1>
    <div class="row">
      <div class="col-lg-12">
        @include("inc.messages")
      </div>
    </div>
    {!! Form::open(["action" => "CategoriesController@store", "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", "", ["class" => "form-control", "placeholder" => "Router, Access Point, or Personal Computer"])}}
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
              <p class="text-muted">Kategori berbeda dengan koleksi. Kategori merupakan kumpulan barang yang memiliki karakteristik yang mirip. Contoh: Router, Access Point, atau Personal Computer</p>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-lg-12">
          <a href="/categories" class="btn">Cancel</a>
          {{ Form::submit("Add Category", ["class" => "btn btn-primary pull-right"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection