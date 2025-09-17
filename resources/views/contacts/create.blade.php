@extends('layouts.app')

@section('content')
<form action="{{ route('contacts.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Address</label>
    <textarea name="address" class="form-control" required></textarea>
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label>Notes</label>
    <textarea name="notes" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Save</button>
  <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
