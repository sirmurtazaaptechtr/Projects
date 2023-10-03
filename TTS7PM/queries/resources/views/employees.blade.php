@extends('Template.layout')
@section('title')
Welcome - All Employees    
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $id => $employee)
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->city }}</td>
                <td>{{ $employee->country }}</td>
                <td><a href="{{ route('employee', ['id' => $employee->id]) }}" class="btn btn-outline-success">View</a></td>
            </tr>
            @endforeach        
        </tbody>
    </table>
    <div>
        {{ $employees->links() }}
    </div>
</div>
@endsection


    

    