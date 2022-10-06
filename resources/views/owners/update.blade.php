@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">

    <form action="{{ route('owners.update', $owner->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input class="form-control" type="text" name="name" value="{{ $owner->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Surname:</label>
            <input class="form-control" type="text" name="surname" value="{{ $owner->surname }}" required>
        </div>
        <div  class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ $owner->email }}">
            @error('email')
            @foreach( $errors->get('email') as $error)
                <div class="alert alert-danger"> {{ $error }} </div>
            @endforeach
            @enderror
        </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('owners.index') }}">Go Back</a>
    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
