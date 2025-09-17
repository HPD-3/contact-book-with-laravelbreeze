@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>👤 Contact Details</h4>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Address:</strong> {{ $contact->address }}</p>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">✏️ Edit</a>
        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">🗑 Delete</button>
        </form>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">⬅ Back</a>
    </div>
</div>
@endsection
