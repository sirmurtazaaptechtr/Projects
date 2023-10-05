@extends('Template.layout')
@section('title')
    Welcome - 
@endsection
@section('content')
<main class="container">
    <div class="container mt-3">
        <h2>Employee</h2>
        <form action="{{ route('addEmployee') }}" method="post">
            @csrf   
          <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
          </div>
          <div class="mb-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
          </div>
          <div class="mb-3">
            <label for="age">Age:</label>
            <input type="text" class="form-control" id="age" placeholder="Enter Age " name="age">
          </div>
          <div class="mb-3">
            <label for="phone">Phone Number:</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
          </div>
          <div class="mb-3">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="EnterAddress" name="address">
          </div>
          <div class="mb-3">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" placeholder="Enter " name="city">
          </div>
          <div class="mb-3">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" placeholder="Enter " name="country">
          </div>         
          <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
        </form>
      </div>

</main>
    
@endsection