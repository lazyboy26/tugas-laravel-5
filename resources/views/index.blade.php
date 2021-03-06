@extends('layouts.app')

@section('title', 'Friends')

@section('content')

    @foreach ($friends as $friend)
        <div class="card mt-2 mb-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $friend['nama'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlpn'] }}</h6>
                <p class="card-text">{{ $friend['alamat'] }}</p>
                <a href="#" class="card-link btn btn-warning">Edit Teman</a>
                <a href="#" class="card-link btn btn-danger">Delete Teman</a>
            </div>
        </div>
    @endforeach

    <div class="">{{ $friends->links() }}</div>

@endsection
