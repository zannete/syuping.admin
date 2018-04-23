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
        <h1 class="pull-left">Vendors</h1>
        <a href="/vendors/create" class="btn btn-primary pull-right">Create Vendor</a>
      </div>
    </div>
    @if(count($vendors) > 0)
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
                    <td>#</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Products</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 0; ?>
                  @foreach($vendors as $vendor)
                    <?php $number++ ?>
                    <tr>
                      <td>{{ $number }}</td>
                      <td><a href="/vendors/{{ $vendor->id }}/edit">{{ $vendor->name }}</a></td>
                      <td>{{ $vendor->description }}</td>
                      <td>0 products</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                <div class="col-lg-12 text-center">
                  {{ $vendors->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @else
      <p>No vendors found</p>
    @endif
  </div>
@endsection