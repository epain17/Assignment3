@extends("layout")


@section("content")
    @foreach ($products as $product)


<div class="card mb-3" style="float:left">
  <img class="card-img-top" src={{ $product->image }} alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $product->title }}</h5>
    <h5 class="card-title">{{ $product->price }}kr</h5>
    <p class="card-text">{{ $product->description }}.</p>
    <a href="{{ route('products.show', ['id'=> $product->id]) }}" class="card-link">Read more</a>

  </div>

</div>
    @endforeach
@endsection
