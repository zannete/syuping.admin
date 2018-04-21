@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @include("inc.messages")
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h1>Collections</h1>        
      </div>
      <div class="col-lg-6 text-right">
        <a href="/collections/create" class="btn btn-primary pull-right">Create Collection</a>
      </div>
    </div>
  </div>
@endsection
