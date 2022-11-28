@extends('web')
@section('title', 'Book Detail')

@section('main')
    <main>
        <div class="card mb-3">
            <div class="card-header bg-light text-primary" style="font-weight: 500">Book Details</div>
            <div class="row g-0">
                <div class="col-md-3">
                    <img src={{ $booksData->image }} class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-dark">
                        <h4 class="card-title">{{ $booksData->title }}</h4>
                        <br>
                        <p class="card-text"><b>Author: </b>{{ $booksData->author }}</p>
                        <p class="card-text"><b>Year: </b> {{ $booksData->year }}</p>
                        <p class="card-text"><b>Publisher: </b>{{ $publisherData->name }}</p>
                        <p class="card-text"><b>Synopsis: </b></p>
                        <p class="card-text">{{ $booksData->synopsis }}</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
@section('footer')
    <div class="fixed-bottom">
        <footer class="bg-light text-center text-lg-start">
            <h5 class="text-center p-3" style="margin-bottom: 0rem">
                © Happy Book Store 2022
            </h5>
        </footer>
    </div>
@endsection
