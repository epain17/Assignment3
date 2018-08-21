@extends("layout")

@section("content")

<h1>Add a review for {{ $product->title }}</h1>

<form action="{{ route('products.saveReview', ['product' => $product->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$review->name}}">
    </div>
    <div class="form-group">
        <label for="publisher">Comment</label>
        <input type="text" class="form-control" id="comment" name="comment" value="{{$review->comment}}">
    </div>

    <div class="form-group">
        <label for="publisher">Grade</label>
        <input type="text" class="form-control" id="grade" name="comment" value="{{$review->grade}}">
    </div>

    <button type="submit" class="btn btn-success">Save review</button>

  </form>



@endsection
