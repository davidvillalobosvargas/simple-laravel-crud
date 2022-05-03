@extends('layouts.default')
@section('content')
<form method="POST" action="{{ route('sharks.update',$shark->id) }}">
    @method('PATCH')
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                name="name"
                id="name"
                type="text"
                value="{{ $shark->name }}"
                class="form-control @error('name') is-invalid @else is-valid @enderror">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input
                name="email"
                id="email"
                type="email"
                value="{{ $shark->email }}"
                class="form-control @error('email') is-invalid @else is-valid @enderror">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="shark_level">Shark level</label>
            <input
                name="shark_level"
                id="shark_level"
                type="shark_level"
                value="{{ $shark->shark_level }}"
                class="form-control @error('shark_level') is-invalid @else is-valid @enderror">
                @error('shark_level')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <input type="submit" value="Edit the shark!" class="btn btn-primary">
    </form>
@endsection
