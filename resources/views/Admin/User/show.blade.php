@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <h1>User Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $user->name }}</h5>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Role: {{ ucfirst($user->role) }}</p>

                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
