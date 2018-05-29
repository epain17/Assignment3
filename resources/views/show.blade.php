@extends("layout")

@section("content")

<div class="card mb-3">
  <img class="card-img-top" src={{ $product->image }} alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $product->title }}</h5>
    <p class="card-text">{{ $product->description }}.</p>
  </div>
  <h6>Reviews</h6>
  <ul class="list-group">
    @foreach ($reviews as $review)

  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $review->comment}}
    <span class="badge badge-primary badge-pill">{{ $review->grade}}</span>
  </li>

  @endforeach

  <h6>In stock</h6>
  <ul class="list-group">
    @foreach ($stores as $store)

  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $store->name}}
  </li>

  @endforeach

</ul>

</div>

@endsection