@extends('layout.app')

@section('content')
    <h1>User Data</h1>
    <ul>
        @foreach ($userData as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
