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
        <h1 class="pull-left">Categories</h1>
        <a href="/categories/create" class="btn btn-primary pull-right">Create New Category</a>
      </div>
    </div>
    @if(count($categories) > 0)
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
                  <?php $number = 0 ?>
                  @foreach($categories as $category)
                    <?php $number++ ?>
                    <tr>
                      <td>{{ $number }}</td>
                      <td><a href="/categories/{{ $category->id }}/edit">{{ $category->name }}</a></td>
                      <td>{{ $category->description }}</td>
                      <td>0 products in category</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="row">
        <div class="col-lg-12">
          <p>No categories found.</p>
        </div>
      </div>
    @endif
  </div>
@endsection