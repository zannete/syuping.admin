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
        <h1>Update Tag</h1>
      </div>
    </div>
    {!! Form::open(["action" => ["TagsController@update", $tag->id], "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", $tag->name, ["class" => "form-control", "placeholder" => "Produk Lokal"])}}
              </div>
              <div class="form-group">
                {{ Form::label("description", "Description") }}
                {{ Form::textarea("description", $tag->description, ["class" => "form-control", "rows" => 5]) }}
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
        <div class="col-lg-6">
          <a href="/tags" class="btn btn-clear">Cancel</a>
        </div>
        <div class="col-lg-6 text-right">
          {{ Form::hidden("_method", "PUT") }}
          {{ Form::button("Delete Tag", ["class" => "btn btn-danger", "data-toggle" => "modal", "data-target" => "#modalDelete"])}}
          {{ Form::submit("Edit Tag", ["class" => "btn btn-primary"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>

  @include("inc.modalDelete", ["controller" => "TagsController@destroy", "id" => $tag->id, "name" => $tag->name])
@endsection