@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">

{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                    <div>{{ $error }}</div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endif--}}

    @error ('reg_number') @enderror
    <form action="{{ route('cars.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Reg#:</label>
            <label>
                <input class="form-control @if ($errors->has('reg_number')) is-invalid @endif" type="text" name="reg_number" value="{{ old('reg_number') }}" required>
                @if ($errors->has('reg_number'))
                    @foreach($errors->get('reg_number') as $error)
                    {{ $error }} <br>
                    @endforeach
                @endif
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Brand:</label>
            <label>
                <input class="form-control" type="text" name="brand" value="{{ old('brand') }}" required>
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Model:</label>
            <label>
                <input class="form-control" type="text" name="model" value="{{ old('model') }}" required>
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Owner</label>
            <label>
                <select class="form-control name="owner_id">
                    <option selected>Choose</option>
                    @foreach($owners as $owner)
                        <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                    @endforeach
                </select>
{{--                <input class="form-control" type="text" name="owner_id" value="{{ old('owner_id') }}" required>--}}
            </label>
        </div>
        <button class="btn btn-primary">Add new</button>
        <a class="btn btn-dark mx-3 float-end" href="{{ route('cars.index') }}">Go Back</a>
    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
