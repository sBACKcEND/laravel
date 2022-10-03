@extends('layouts.main')
@section('content')

    <form action="{{ route('owners.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <label>
                <input class="form-control" type="text" name="name">
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Surname:</label>
            <label>
                <input class="form-control" type="text" name="surname">
            </label>
        </div>
        <button class="btn btn-primary">Add new</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('owners.index') }}">Go Back</a>
    </form>
@endsection
