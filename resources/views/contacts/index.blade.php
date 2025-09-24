@extends('layouts.app')

@section('content')
<a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">+ Add Contact</a>

<table class="table table-bordered" id="myTable">
  <thead>
    <tr>
      <th>Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->address }}</td>
      <td>{{ $contact->phone }}</td>
      <td>{{ $contact->email }}</td>
      <td>
        <a href="{{ route('contacts.show',$contact) }}" class="btn btn-info btn-sm">View</a>
        <a href="{{ route('contacts.edit',$contact) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('contacts.destroy',$contact) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $contacts->links() }}
@endsection
