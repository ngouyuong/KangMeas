@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        @include('pages.users.form')
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a class="btn btn-sm btn-warning" href="{{ route('users') }}">Cancel</a>
    </form>
@endsection
