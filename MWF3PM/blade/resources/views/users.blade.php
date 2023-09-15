@extends('layout.master')

@section('title')
    All Users    
@endsection

@section('content')
    <h1>All Users</h1>
    {{-- <h3>Welcome {{ $user }}</h3>    
    <h3>Location : {{ $city }}</h3>     --}}
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $id => $user)
            <tr>
                <td>{{ $id }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['gender'] }}</td>
                <td>{{ $user['city'] }}</td>
                <td><a href="{{ route('user',$id) }}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>        
@endsection