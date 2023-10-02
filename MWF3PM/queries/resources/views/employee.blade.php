@extends('layout.master')
@section('title')
Welcome - Employee Details    
@endsection
@section('content')
<main class="container">

    @foreach ($employee as $data)
    
    @endforeach
    <h1>Employee Details - {{ $data->name }}</h1>
    <ul>
        <li><b>ID :</b> {{ $data->id }}</li>
        <li><b>Name :</b> {{ $data->name }}</li>
        <li><b>Email :</b> {{ $data->email }}</li>
        <li><b>Age :</b> {{ $data->age }}</li>
        <li><b>Phone :</b> {{ $data->phone }}</li>
        <li><b>Address :</b> {{ $data->address }}</li>
        <li><b>City :</b> {{ $data->city }}</li>
        <li><b>Country :</b> {{ $data->country }}</li>
    </ul>
</main>
@endsection