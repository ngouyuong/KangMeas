@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('users.update', $user['id']) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        @include('pages.users.form')
        <button type="submit" class="btn btn-sm btn-primary">Update</button>
        <a class="btn btn-sm btn-warning" href="{{ route('users') }}">Cancel</a>
    </form>
@endsection
