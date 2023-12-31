@extends('layout.master')
@section('title')
Welcome - Employee Details    
@endsection
@section('content')
<main class="container">    
    <h1>Employee Details</h1>
    @foreach ($employee as $data)
    <ul>
        <h2>{{ $data->name }}</h2>
        <li><b>ID :</b> {{ $data->id }}</li>
        <li><b>Name :</b> {{ $data->name }}</li>
        <li><b>Email :</b> {{ $data->email }}</li>
        <li><b>Age :</b> {{ $data->age }}</li>
        <li><b>Phone :</b> {{ $data->phone }}</li>
        <li><b>Address :</b> {{ $data->address }}</li>
        <li><b>City :</b> {{ $data->city }}</li>
        <li><b>Country :</b> {{ $data->country }}</li>
    </ul>
    @endforeach
</main>
@endsection