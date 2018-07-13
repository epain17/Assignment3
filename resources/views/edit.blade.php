@extends("layout")

@section("content")

<h1>Add a game</h1>

<form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
    </div>
    <div class="form-group">
        <label for="publisher">Publisher</label>
        <input type="text" class="form-control" id="publisher" name="publisher" value="{{$product->publisher}}">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="integer" class="form-control" id="price" name="price" value="{{$product->price}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="integer" class="form-control" id="description" name="description" value="{{$product->description}}">

    </div>
    <div class="form-group">
        <label for="image">Link to image</label>
        <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}">
    </div>

    <button type="submit" class="btn btn-success">Update game</button>

<form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
  @csrf
  <input name="_method" type="hidden" value="DELETE">
      <button class="btn btn-danger" type="submit">Delete Game</button>


@endsection
