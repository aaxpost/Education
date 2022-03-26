<x-layout>
<table border = 1>  
@foreach($names as $name)
<tr>
<td>{{ $name->id }}</td>
<td>{{ $name->name }}</td>
<td>{{ $name->email }}</td>
<td>{{ $name->age }}</td>
<td>{{ $name->salary }}</td>
<td>{{ $name->created_at }}</td>
</tr>
@endforeach
</table>   
</x-layout>