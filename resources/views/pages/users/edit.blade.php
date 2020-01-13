@extends('layouts.master')

@section('title','Users')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('users.update', $user['id']) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            @include('pages.users.form')
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
            <a class="btn btn-sm btn-warning" href="{{ route('users') }}">Cancel</a>
        </form>
    </div>
@endsection
