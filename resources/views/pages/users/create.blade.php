@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        @include('pages.users.form')
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password ...">
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a class="btn btn-sm btn-warning" href="{{ route('users') }}">Cancel</a>
    </form>
@endsection
