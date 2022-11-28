@extends('web')
@section('title', 'Home')

@section('main')
    <main>
        <div class="container">
            <div class="card" style="margin-bottom: 20px; margin: 17px;">
                <h5 class="card-header bg-light text-primary">Book List</h5>
            </div>
            <div class="row row-cols-4 gy-4" style="20px 0px">
                @foreach ($books_data as $books)
                    <div class="col" style="display: flex; justify-content:space-evenly; align-items:center; padding: 0px 30px">
                        <div class="card" style="width: 18rem;">
                            <img class="img-fluid" src={{ $books->image }} >
                            <div class="card-body">
                                <h5 class="card-title">{{ $books->title }}</h5>
                                <p class="card-text">
                                    by <br>
                                    {{ $books->author }}
                                </p>
                                <a class="btn btn-primary" href="/book/{{ $books->id }}">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="margin-bottom: 50px"></div>
        </div>
    </main>
@endsection
@section('footer')
    <div class="sticky-bottom">
        <footer class="bg-light text-center text-lg-start">
            <h5 class="text-center p-3" style="margin-bottom: 0rem">
                © Happy Book Store 2022
            </h5>
        </footer>
    </div>
@endsection
