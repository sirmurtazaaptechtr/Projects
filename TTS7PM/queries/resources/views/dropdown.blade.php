@extends('Template.layout')
@section('title')
    Welcome - 
@endsection
@section('content')
<main>
    <select name="" id="">
        @foreach ($cities as $id => $city)
        <option value="{{ $city->city }}">{{ $city->city }}</option>            
        @endforeach
    </select>

</main>

@endsection
