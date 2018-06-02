@extends("layout")

@section("content")

<h1>Add a game</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="publisher">Publisher</label>
        <input type="text" class="form-control" id="publisher" name="publisher">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="integer" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
        <label for="image">Link to image</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>

  @foreach ($stores as $store)
    <div class="form-check">
     <input type="checkbox" class="form-check-input" id="{{$store->id}}">
     <label class="form-check-label" for="exampleCheck1">{{ $store->name }}</label>
   </div>
   @endforeach

    <button type="submit" class="btn btn-success">Add game</button>

@endsection
