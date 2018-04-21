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
    {!! Form::open(["action" => "TagsController@store"]) !!}
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
          <div class="panel">
            <div class="panel-body" style="margin-bottom: 120px">
              <h5>Tag Image</h5>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-lg-6">
          {{ Form::button("Cancel", ["class" => "btn btn-clear"]) }}
        </div>
        <div class="col-lg-6 text-right">
          {{ Form::submit("Save Tag", ["class" => "btn btn-primary"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection