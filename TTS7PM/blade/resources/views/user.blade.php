@extends('layout.master')

@section('title')
{{ $user['name'] }}    
@endsection
@section('content')
    <h1>User Details</h1>
    <ul>
        <li><b>Name : </b>{{ $user['name'] }}</li>
        <li><b>Gender : </b>{{ $user['gender'] }}</li>
        <li><b>City : </b>{{ $user['city'] }}</li>
    </ul>
@endsection