@extends('layouts.main')
@section('content')
    <a class="btn btn-primary" href="{{ route('cars.create') }}">Add new car</a>
    <table class="table">
        <thead>
        <tr>
            <th>Reg#</th>
            <th>Car Brand</th>
            <th>Car Model</th>
            <th>Owner id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->reg_number }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->owner_id }}</td>
                <td><a class="btn btn-success" href="{{ route('cars.edit', $car->id) }}">Edit</a> </td>
                <td>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

