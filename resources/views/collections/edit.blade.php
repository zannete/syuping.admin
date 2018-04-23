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
    {!! Form::open(["action" => ["CollectionsController@update", $collection->id], "method" => "POST"]) !!}
      <div class="row">
        <div class="col-lg-8">
          <div class="panel">
            <div class="panel-body">
              <div class="form-group">
                {{ Form::label("name", "Name") }}
                {{ Form::text("name", $collection->name, ["class" => "form-control", "placeholder" => "Summer Collection"]) }}
              </div>
              <div class="form-group">
                {{ Form::label("description", "Description") }}
                {{ Form::textarea("description", $collection->description, ["class" => "form-control", "rows" => 5]) }}
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-body">
              <h5>Select products</h5>
              {{ Form::select("products", ["1" => "Product 1", "2" => "Product 2"], null, ["class" => "form-control selectpicker"]) }}
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="panel">
            <div class="panel-body">
              <h5>Publish</h5>
              <dl class="dl-horizontal">
                <dt style="width: 90px">Status:</dt>
                <dd style="margin-left: 100px">{{ $collection->status }} <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                {{ Form::hidden("status", $collection->status) }}
                <dt style="width: 90px">Visibility:</dt>
                <dd style="margin-left: 100px">{{ $collection->visibility }} <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                {{ Form::hidden("visibility", $collection->visibility) }}
                <dt style="width: 90px">Publish Date:</dt>
                <dd style="margin-left: 100px">{{ date("d/m/Y", strtotime($collection->publishedDate)) }} <u style="margin-left: 8px"><a href="#">Edit</a></u></dd>
                {{ Form::hidden("publishedDate", $collection->publishedDate) }}
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
        <div class="col-lg-6">
          <a href="/collections" class="btn">Cancel</a>
        </div>
        <div class="col-lg-6 text-right">
          {{ Form::hidden("_method", "PUT") }}
          {{ Form::button("Delete Collection", ["class" => "btn btn-danger", "data-target" => "#modalDelete", "data-toggle" => "modal"]) }}
          {{ Form::submit("Update Collection", ["class" => "btn btn-primary"]) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
  @include("inc.modalDelete", ["controller" => "CollectionsController@destroy", "id" => $collection->id, "name" => $collection->name])
@endsection

@section("additionalJS")
  <script>
    $('.selectpicker').selectpicker({
      style: 'btn-default',
      liveSearch: true
    });
  </script>
@endsection