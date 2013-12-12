@layout('master')

@section('contenido')
<h2>Nuevo post</h2>
<form method="POST">
	Titulo: <input name="title" /><br/>
	Contenido: <textarea name="content"></textarea><br/>
	@if($users)
	Autor: 	<select name="user_id">
			@foreach($users as $user)
				<option value="{{ $user->id }}">{{ $user->name }}</option>	
			@endforeach
			</select><br/>
	@endif
	<input type="submit" value="Publicar"/>
</form>

@endsection