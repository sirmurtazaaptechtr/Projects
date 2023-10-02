<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($employee as $data)
        
    @endforeach
    <h1>Employee Details - {{ $data->name }}</h1>
    <ul>
        <li><b>ID :</b> {{ $data->id }}</li>
        <li><b>Name :</b> {{ $data->name }}</li>
        <li><b>Email :</b> {{ $data->email }}</li>
        <li><b>Age :</b> {{ $data->age }}</li>
        <li><b>Phone :</b> {{ $data->phone }}</li>
        <li><b>Address :</b> {{ $data->address }}</li>
        <li><b>City :</b> {{ $data->city }}</li>
        <li><b>Country :</b> {{ $data->country }}</li>
    </ul>
    
</body>
</html>