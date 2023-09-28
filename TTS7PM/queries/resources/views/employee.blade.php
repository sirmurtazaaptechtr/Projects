@extends('Template.layout')
@section('title')
    Welcome - 
@endsection
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>    
            </tr>
        </thead>
        <tbody>
    @foreach ($employee as $value )
    <tr>    
        <td>{{ $value->id }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->phone }}</td>
        <td>{{ $value->age }}</td>
        <td>{{ $value->address }}</td>
        <td>{{ $value->city }}</td>
        <td>{{ $value->country }}</td>    
    </tr>
    </tbody>
    </table>
</div>
@endforeach
    
@endsection