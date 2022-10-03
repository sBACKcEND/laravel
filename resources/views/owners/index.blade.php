@extends('layouts.main')
@section('content')
    <a class="btn btn-primary" href="{{ route('owners.create') }}">Add new owner</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
        </tr>
        </thead>
        <tbody>
        @foreach($owners as $owner)
            <tr>
                <td>{{ $owner->name }}</td>
                <td>{{ $owner->surname }}</td>
                <td><a class="btn btn-success" href="{{ route('owners.edit', $owner->id) }}">Edit</a> </td>
                <td>
                    <form action="{{ route('owners.destroy', $owner->id) }}" method="post">
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
