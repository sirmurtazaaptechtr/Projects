@php
    $students = ["Zubair"=>20,"Nabeel"=>17,"Saad"=>17,"Hamza"=>18,"Tooba"=>21,"Dua"=>24,"Asad"=>25];
    // $students = [];
@endphp
@include('include.header')
@include('include.users',['users'=>$students])
@include('include.footer')