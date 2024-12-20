@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Account</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.accounts.update', $account->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $account->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $account->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $account->phone }}">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $account->location }}">
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" class="form-control">
                <option value="user" {{ $account->role == 'admin' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ $account->role == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>        
        <button type="submit" class="btn btn-success">Update Account</button>
        <a href="{{ route('admin.accounts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
