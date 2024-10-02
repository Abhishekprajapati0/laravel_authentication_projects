@extends('master')

@section('body')
    <section class="container">
        <div class="main mt-4 p-2">
            <h3>Welcome to the Profile page  || {{ auth()->user()->name }} ||</h3>
        </div>
        <a href="{{ url('logout') }}" class="btn btn-success btn-sm float-end mt-3 p-3">Logout</a>
    </section>
@endsection
