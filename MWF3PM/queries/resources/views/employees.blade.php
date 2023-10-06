@extends('layout.master')
@section('title')
Welcome - All Employees    
@endsection
@section('content')
<main class="container">
    <h1>All Employees</h1>

    <div>
        <a type="button" class="btn btn-outline-success" href="{{ route('addNewEmployee') }}"> + Add Employee</a>
    </div>
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
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->city }}</td>
                <td>{{ $employee->country }}</td>
                <td>
                    <div class="btn-group">
                        <a type="button" class="btn btn-outline-info" href="{{ route('employee',['id' => $employee->id]) }}">View</a>
                        <a type="button" class="btn btn-outline-danger" href="{{ route('deleteEmployee',['id' => $employee->id]) }}">Delete</a>
                        <a type="button" class="btn btn-outline-warning" href="#">Update</a>
                    </div>
                </td>
            </tr>                
            @endforeach            
        </tbody>
    </table>
    <div>
        {{ $employees->links() }}
    </div>
</main>    
@endsection 