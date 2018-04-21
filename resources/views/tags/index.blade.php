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
              </tr>
            </thead>
            <tbody>
              <?php $number = 0 ?>
              @foreach($tags as $tag)
                <?php $number++ ?>
                <tr>
                  <td>{{ $number }}</td>
                  <td><a href="/tags/{{$tag->id}}/edit">{{ $tag->name }}</a></td>
                  <td>{{ $tag->description }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col-lg-12 text-center">
              {{ $tags->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection