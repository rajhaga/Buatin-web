@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>All Packages</h2>
    <a href="{{ route('admin.packages.create') }}" class="btn btn-primary">Create New Package</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packages as $package)
                <tr>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->price }}</td>
                    <td>{{ $package->description }}</td>
                    <td>
                        <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
