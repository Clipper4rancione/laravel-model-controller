@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row d-flex">

            @foreach ($movies as $movie)
                <div class="col-auto py-3">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                            <p class="card-text"> Date: {{ $movie->date }}</p>
                            <p class="card-text"> Vote: {{ $movie->vote }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
