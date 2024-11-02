@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="heading">
        <h2>Edit Portfolio Item</h2>
    </div>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')
    
        <!-- Field input untuk name, email, phone, location, password -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
        </div>
    
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
        </div>
    
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
        </div>
    
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ Auth::user()->location }}">
        </div>
    
        <div class="form-group">
            <label for="password">Password (Leave blank to keep current)</label>
            <input type="password" name="password" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-success">Update Profile</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
    </form>
    
</div>
@endsection
