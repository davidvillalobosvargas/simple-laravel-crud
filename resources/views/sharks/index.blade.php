@extends('layouts.default')
@section('content')
<h1>All the sharks</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>shark Level</td>
            <td colspan='3'>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($sharks as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->shark_level }}</td>

            <!-- we will also add show, edit, and delete buttons -->

            <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <td>
                <form action="{{ route('sharks.destroy',$value->id) }}" method="post" >
                    @method("DELETE")
                    @csrf
                    <input class="btn btn-small btn-danger" type="submit" value="Delete this shark">
                </form>
            </td>
                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <td><a class="btn btn-small btn-success" href="{{ route('sharks.show',$value->id) }}">Show this shark</a></td>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <td><a class="btn btn-small btn-info" href="{{ route('sharks.edit',$value->id) }}">Edit this shark</a></td>

        </tr>
    @endforeach
    </tbody>
</table>
@endsection
