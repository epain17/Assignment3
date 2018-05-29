@extends("layout")


@section("content")
    @foreach ($products as $product)


<div class="card mb-3">
  <img class="card-img-top" src={{ $product->image }} alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $product->title }}</h5>
    <p class="card-text">{{ $product->description }}.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
    @endforeach
@endsection
