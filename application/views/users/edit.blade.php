@layout('master')

@section('contenido')
<h2>Actualizar usuario</h2>
<form method="POST">
	Nombre:		<input name="name"		value= "{{$user->name}}" 	 /><br/>
	Email:		<input name="email" 	value= "{{$user->email}}"	 /><br/>
	Password:	<input name="password" 	value= "{{$user->password}}" /><br/>
	<input type="submit" value="Enviar"/>
</form>

@endsection