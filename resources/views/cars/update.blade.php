@extends('layouts.main')
@section('content')

    <form action="{{ route('cars.update', $car->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Reg#:</label>
            <label>
                <input class="form-control" type="text" name="reg_number" value="{{ $car->reg_number }}">
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Brand:</label>
            <label>
                <input class="form-control" type="text" name="brand" value="{{ $car->brand }}">
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Model:</label>
            <label>
                <input class="form-control" type="text" name="model"  value="{{ $car->model }}">
            </label>
        </div>
            <div  class="mb-3">
                <label class="form-label">Owner id:</label>
                <label>
                    <input class="form-control" type="text" name="owner_id" value="{{ $car->owner_id }}">
                </label>
            </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('cars.index') }}">Go Back</a>
    </form>
@endsection
