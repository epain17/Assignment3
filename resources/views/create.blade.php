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



    <button type="submit" class="btn btn-success">Save Game</button>
</form>

@endsection
