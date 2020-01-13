@extends('layouts.master')

@section('title','Roles')

@section('content')
    <form method="POST" action="{{ route('roles.update', $role['id']) }}">
        @csrf
        <div class="container-fluid">
            <input type="hidden" name="_method" value="PUT">
            @include('pages.roles.form')
            <a href="{{ route('roles') }}">
                <button class="btn btn-secondary">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary" >Update</button>
        </div>
    </form>
@endsection
