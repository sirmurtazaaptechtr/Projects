<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style></style>
    </head>
    <body>
        @php
            $data = ["Kinza Danish"=>20,"Fatima Zehra"=>20,"Ahsan Ilyas"=>21,"Yaseen"=>20,"Shayan"=>21,"Rohan"=>20,"Husnain Ali"=>19,"Saqlain"=>16];
            // $data = [];
        @endphp
        {{-- @include('pages.header',['username' => 'Ahsan Ilyas', 'age' => 21]) --}}
        {{-- @include('pages.header',['username' => 'Fatima Zehra', 'age' => 20]) --}}
        @include('pages.header')
        {{-- <h1>Welcome Page</h1> --}}
        @include('pages.users',['users'=>$data])
        @include('pages.footer')
    </body>
</html>
