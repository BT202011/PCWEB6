@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <strong>Hello {{ $user->name }}</strong>
            <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>

            </div>
        </div>
    </div>
</div>
@endsection