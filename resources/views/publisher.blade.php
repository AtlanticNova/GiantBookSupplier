@extends('web')
@section('title', 'Publisher')

@section('main')
    <main>
        <div class="container">
            <div class="row row-cols-4 gy-4" style="20px 0px">
                @foreach ($publisher_data as $publisher)
                    <div class="col" style="display: flex; justify-content:space-evenly; align-items:center; padding: 0px 30px">
                        <div class="card" style="width: 18rem;">
                            <img class="img-fluid" src={{ $publisher->image }}>
                            <div class="card-body">
                                <h5 class="card-title">Name : {{ $publisher->name }}</h5>
                                <p class="card-text">Address : {{ $publisher->address }}</p>
                                <p class="card-text">Phone : {{ $publisher->phone }}</p>
                                <p class="card-text">Email : {{ $publisher->email }}</p>
                                <a class="btn btn-primary" href="/publisher/{{ $publisher->id }}">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div style="margin-bottom: 100px"></div>
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
