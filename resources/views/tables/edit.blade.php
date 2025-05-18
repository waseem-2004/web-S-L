@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Table</h2>

    <form action="{{ route('dataTable.update', $table->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('dataTable.form', ['table' => $table])
    </form>
</div>
@endsection
