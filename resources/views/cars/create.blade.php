@extends('layouts.main')
@section('content')

    <form action="{{ route('cars.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Reg#:</label>
            <label>
                <input class="form-control" type="text" name="reg_number">
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Brand:</label>
            <label>
                <input class="form-control" type="text" name="brand">
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Model:</label>
            <label>
                <input class="form-control" type="text" name="model">
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Owner id:</label>
            <label>
                <input class="form-control" type="text" name="owner_id">
            </label>
        </div>
        <button class="btn btn-primary">Add new</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('cars.index') }}">Go Back</a>
    </form>
@endsection
