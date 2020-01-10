@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="container-fluid">
            @include('pages.roles.form')
            <a href="{{ route('roles') }}">
                <button class="btn btn-secondary">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary" >Create</button>
        </div>
    </form>
@endsection
