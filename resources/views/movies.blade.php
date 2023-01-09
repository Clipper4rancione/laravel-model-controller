@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <ul>
                    @foreach ($movies as $movie)
                        <li>{{ $movie->title }}</li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
