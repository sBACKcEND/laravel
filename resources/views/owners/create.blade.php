@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">

{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <div>{{ $error }}</div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endif--}}

    <form action="{{ route('owners.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Surname:</label>
            <label>
                <input class="form-control" type="text" name="surname" value="{{ old('surname') }}" required>
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Email</label>
            <label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required>
            @error('email')
            @foreach( $errors->get('email') as $error)
                <div class="alert alert-danger"> {{ $error }} </div>
            @endforeach
            @enderror
            </label>
        </div>
        <button class="btn btn-primary">Add new</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('owners.index') }}">Go Back</a>
    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
