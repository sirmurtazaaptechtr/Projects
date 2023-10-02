@extends('layout.master')
@section('title')
Welcome - All Employees    
@endsection
@section('content')
<main class="container">
    <h1>All Employees</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $id => $employee)
            <tr>
                <th scope="row">{{ $id + 1 }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->city }}</td>
                <td>{{ $employee->country }}</td>
                <td><a href="{{ route('employee',['id' => $employee->id]) }}">View</a></td>
            </tr>                
            @endforeach            
        </tbody>
    </table>
</main>    
@endsection 