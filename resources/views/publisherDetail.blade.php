@extends('web')
@section('title', 'Publisher Details')

@section('main')
    <main>
        <div class="container center" style="padding-bottom: 70px; padding-top: 20px">
            <div class="card" style="margin-bottom: 20px">
                <div class="card-header bg-dark text-white">Publisher Detail</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $publisherData->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Address: {{ $publisherData->address }}</li>
                    <li class="list-group-item">Phone : {{ $publisherData->phone }}</li>
                    <li class="list-group-item">Email : {{ $publisherData->email }}</li>
                </ul>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-1">
                @foreach ($booksData as $books)
                    <div class="col">
                        <div class="card h-100" style="width: 18rem;" style="align-items: center; justify-content: center;">
                            <img src={{ $books->image }} class="img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $books->title }}</h5>
                                <p>by</p>
                                <p class="card-text">{{ $books->author }}</p>
                                <a class="btn btn-primary" href="/book/{{ $books->id }}">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
