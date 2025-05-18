@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tables List</h2>

    <a href="{{ route('tables.create') }}" class="btn btn-primary mb-3">Add New Table</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Table Number</th>
                <th>Status</th>
                <th>Size</th>
                <th>Restaurant ID</th>
                <th>Admin ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tables as $table)
            <tr>
                <td>{{ $table->Table_naumber }}</td>
                <td>{{ $table->status }}</td>
                <td>{{ $table->Size }}</td>
                <td>{{ $table->resturant_id }}</td>
                <td>{{ $table->admin_id }}</td>
                <td>
                    <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tables.destroy', $table->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this table?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
