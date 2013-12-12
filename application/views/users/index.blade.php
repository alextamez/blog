@layout('master')

@section('contenido')

<a href="/users/create">Crear nuevo usuario</a>

@if($users)
<table>
<tr>
	<td>Nombre de usuario</td>
	<td>Email</td>
	<td>Opciones</td>
</tr>

@foreach($users as $user)
<tr>
	<td>{{ $user->name  }}</td>
	<td>{{ $user->email }}</td>
	<td><a href="users/update/{{$user->id}}">Actualizar</a> || <a href="users/delete/{{$user->id}}">Eliminar</a></td>
</tr>
@endforeach

</table>
@endif

@endsection