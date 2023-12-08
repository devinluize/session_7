@extends('app')
@section('content')
    @foreach ($books as $buku)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Buku ke {{ $buku->book_id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Title = {{ $buku->title }}</h6>
                <p class="card-text">penulis = {{ $buku->author }}</p>
                <a href="{{ route('delete_book', ['id' => $buku->book_id]) }}"><button
                        class="btn btn-danger">Delete</button></a>
            </div>
        </div>
        {{-- <p>Buku ke {{ $buku->book_id }}</p>
        <p>Title = {{ $buku->title }}</p>
        <p>penulis = {{ $buku->author }}</p>
        <p>{{ $title }}</p>
        <br>
        <br>
        <a href="{{ route('add_book') }}"><button class="btn btn-danger">Delete</button></a> --}}
    @endforeach
@endsection
