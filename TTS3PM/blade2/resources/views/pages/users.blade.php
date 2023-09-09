<h1>All Users</h1>
<table border="1" width="25%">
    <thead>
        <tr>
            <th>Username</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $username => $age)            
        <tr>
            <td>{{ $username }}</td>
            <td>{{ $age }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="2">
                <h4>No User Found</h4>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>