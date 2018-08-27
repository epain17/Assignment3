@extends("layout")

@section("content")

<h1>Add a review </h1>

<form action="{{ route('reviews.store') }}" method="POST">
    @csrf

    <label for="grade">Choose the game you want to review</label>

      @foreach ($products as $product)
        <div class="form-check">
         <input type="radio" class="form-check-input" id="{{$product->id}}"name="game"
         value="{{$product->id}}">
         <label class="form-check-label" for="exampleCheck1">{{ $product->title }}</label>
       </div>
       @endforeach

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <input type="text" class="form-control" id="comment" name="comment" >
    </div>

    <label for="grade">Grade</label>

    @for ($i = 1; $i < 6; $i++)
    <div class="form-check">
        <input type="radio" class="form-check-input" name ="grade" value= {{ $i }}>
         <label class="form-check-label" for="exampleCheck1">{{ $i}}</label>
       </div>
    @endfor




    <button type="submit" class="btn btn-success">Save review</button>

  </form>



@endsection
