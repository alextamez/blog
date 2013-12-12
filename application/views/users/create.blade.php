@layout('master')

@section('contenido')
<h2>Llena el siguiente formulario para agregar usuario</h2>
<form method="POST">
	Nombre: <input name="name" /><br/>
	Email: <input name="email" /><br/>
	Password: <input name="password" /><br/>
	<input type="submit" value="Enviar"/>
</form>

@endsection