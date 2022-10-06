@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">

                    <a class="btn btn-primary" href="{{ route('cars.create') }}">Add new car</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Reg#</th>
                            <th>Car Brand</th>
                            <th>Car Model</th>
                            <th>Owner</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->reg_number }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td><select class="form-control name="owner_id">
                                    <option selected>Choose</option>
                                    @foreach($owners as $owner)
                                        <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                                        @endforeach
                                        </select>
                                </td>
{{--                                <td>{{ $car->owner->name }}--}}
{{--                                    {{ $car->owner->surname }}--}}

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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection






