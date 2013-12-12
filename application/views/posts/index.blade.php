@layout('master')

@section('contenido')

<a href="posts/create">Crear nuevo usuario</a>

@if($posts)

@foreach($posts as $post)
<pre>
	<h3>{{ $post->title }}</h3>
	<p>{{ $post->content }}</p>
	<p><a href="posts/update/{{$post->id}}">Actualizar</a> || <a href="posts/delete/{{$post->id}}">Eliminar</a></p>
</pre>
@endforeach

@endif

@endsection