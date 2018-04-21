@extends("layouts.app")

@section("content")
  <div class="row">
    <div class="col-lg-12">
      @include("inc.messages")
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h1>Tags</h1>
    </div>
    <div class="col-lg-6 text-right">
      <a class="btn btn-primary" href="/tags/create">Create New Tag</a>
    </div>
  </div>
@endsection