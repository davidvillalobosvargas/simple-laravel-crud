@extends('layouts.default')
@section('content')
<h1>Create a shark</h1>
<form method="POST" action="{{ route('sharks.store') }}">
@csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input
            name="name"
            id="name"
            type="text"
            value="{{ old('name') }}"
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
            value="{{ old('email') }}"
            class="form-control @error('email') is-invalid @else is-valid @enderror">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="form-group">
        {{--
            <input
            <label for="shark_level">Shark level</label>
            name="shark_level"
            id="shark_level"
            type="shark_level"
            value="{{ old('shark_level') }}"
            class="form-control @error('shark_level') is-invalid @else is-valid @enderror">
            @error('shark_level')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
            <label for="shark_level">Shark level:</label>
            <select class='form-control' id="shark_level" name="shark_level">
              <option value="1">Sees Sunlight</option>
              <option value="2">Foosball Fanatic</option>
              <option value="3">Basement Dweller</option>
            </select>
    </div>
    <input type="submit" value="Create the shark!" class="btn btn-primary">
</form>
@endsection
