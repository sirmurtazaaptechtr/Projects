<h1>All Users</h1>
<table border="1" width="25%">
    <thead>
        <tr>
            <th>Sr.no.</th>
            <th>Student Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $name=>$age)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $name }}</td>
            <td>{{ $age }}</td>
        </tr>            
        @empty
        <tr>
            <td colspan="3" style="text-align: center;"><b>No record found</b></td>
        </tr>            
        @endforelse
    </tbody>

</table>