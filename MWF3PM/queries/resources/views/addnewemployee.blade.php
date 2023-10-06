@extends('layout.master')
@section('title')
Welcome - Add New Employee
@endsection
@section('content')
<main class="container">
    <form action="{{ route('addEmployee') }}" method="post" class="was-validated">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3 mt-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>        
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>        
        <div class="mb-3 mt-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
            <div class="invalid-feedback">
                Please provide a valid Address.
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="city" class="form-label">City:</label>
            <input type="text" class="form-control" id="city" name="city" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" required>
            <div class="invalid-feedback">
                Please provide a valid country.
            </div>
        </div>        
        <button type="submit" class="btn btn-outline-success" id="submit" name="submit">Submit</button>
    </form>
</main>
@endsection