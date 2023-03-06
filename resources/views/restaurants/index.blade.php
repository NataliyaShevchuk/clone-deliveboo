@extends('layouts.app')

@section('content')
    <main class="container-fluid">
        <div class="container-fluid text-start">
            <button class="btn btn-warning m-3" class="text-decoration-none text-white">
                <a href="{{ route('dashboard') }}">
                    Back to Dashboard
                </a>
            </button>
        </div>

        <div class="row mx-5 justify-content-center bg-form">
            @foreach ($restaurants as $restaurant)
                <div class="col-5 my-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $restaurant['cover_img']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nome: {{ $restaurant->name }}</h5>
                            <p class="card-text"><b>Numero di telefono:</b> {{ $restaurant->phone_number }}</p>
                            <p class="card-text"><b>P.IVA:</b> {{ $restaurant->vat }}</p>
                            <p class="card-text"><b>Indirizzo:</b> {{ $restaurant->address }}</p>
                            <p>
                                <b>Tipologia:</b>
                                @foreach ($restaurant->types as $type)
                                    <span class="badge rounded-pill text-bg-success">{{ $type->name }}</span>
                                @endforeach
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 m-3">
                        <button class="btn btn-primary my-bg-green border-0">
                            <a href="{{ route('restaurants.create') }}"
                                class="text-decoration-none text-white {{ $restaurant->id > 1 ? 'disabled' : '' }}">
                                <i class="fas fa-plus"></i>
                                Aggiungi
                            </a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
