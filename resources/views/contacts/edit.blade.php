@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>✏️ Edit Contact</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name', $contact->name) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email', $contact->email) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" class="form-control">{{ old('address', $contact->address) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">💾 Update</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">⬅ Cancel</a>
        </form>
    </div>
</div>
@endsection
