<x-layout>
<table border = 1>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>age</th>
    <th>salary</th>
    <th>created_at</th>
@foreach ($users as $user)
    <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->age }}</td>
    <td>{{ $user->salary }}</td>
    <td>{{ $user->created_at }}</td>
    </tr>
     
@endforeach
</table>
</x-layout>