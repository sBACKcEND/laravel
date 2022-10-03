@extends('layouts.main')
@section('content')

    <form action="{{ route('owners.update', $owner->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input class="form-control" type="text" name="name" value="{{ $owner->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Surname:</label>
            <input class="form-control" type="text" name="surname" value="{{ $owner->surname }}">
        </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('owners.index') }}">Go Back</a>
    </form>
@endsection
