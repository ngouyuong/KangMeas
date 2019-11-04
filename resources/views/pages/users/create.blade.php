@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        @include('pages.users.form')
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                   name="password" placeholder="Password ..." value="{{ old('password') }}">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Create</button>
        <a class="btn btn-sm btn-warning" href="{{ route('users') }}">Cancel</a>
    </form>
@endsection
