@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @include("inc.messages")
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="pull-left">Collections</h1>        
        <a href="/collections/create" class="btn btn-primary pull-right">Create New Collection</a>
      </div>
    </div>
    @if(count($collections) > 0)
      <div class="row">
        <div class="col-lg-12">
          <div class="panel">
            <div class="panel-body">
              <div class="form-input-icon">
                <i class="icmn-search"></i>
                {{ Form::text("search", "", ["class" => "form-control", "placeholder" => "Search"]) }}
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Products</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 0 ?>
                  @foreach($collections as $collection)
                    <?php $number++ ?>
                    <tr>
                      <td>{{ $number }}</td>
                      <td><a href="/collections/{{ $collection->id }}/edit">{{ $collection->name }}</a></td>
                      <td>{{ $collection->description }}</td>
                      <td>0 products in collection</td>
                      <td>{{ $collection->status }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-lg-12 text-center">
                  {{ $collections->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="row">
        <div class="col-lg-12">
          <p>No collections found.</p>
        </div>
      </div>
    @endif
  </div>
@endsection
