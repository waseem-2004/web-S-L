@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Table</h2>

    <form action="{{ route('dataTable.store') }}" method="POST">
        @csrf
        @include('dataTable.form')
    </form>
</div>
@endsection
