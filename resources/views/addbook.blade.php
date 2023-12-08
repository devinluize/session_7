@extends('app')
@section('content')
    <form action="{{ route('store_book') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book title</label>
            <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Book Author</label>
            <input type="text" class="form-control" name="author">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
