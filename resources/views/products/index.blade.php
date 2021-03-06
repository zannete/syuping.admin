@extends("layouts.app")

@section("content")
  <div class="row">
    <div class="col-lg-12">
      <h1 class="pull-left">Products</h1>
      <a class="btn btn-primary pull-right" href="/products/create">Create New Product</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-body">
          <div class="form-input-icon">
            <i class="icmn-search"></i>
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Product</th>
                <th>Inventory</th>
                <th>Type</th>
                <th>Vendor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" /></td>
                <td>Product 1</td>
                <td>12 in stock</td>
                <td>Router</td>
                <td>Tenda</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section("additionalJS")
@endsection