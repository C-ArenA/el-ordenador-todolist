<p>{{ $user }}</p> {{-- TODO: Mostrar los datos de forma organizada --}}

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar Usuario</button>
</form>
{{-- TODO: Redireccionar a las rutas correctas --}}
<a href="#">Editar Usuario</a>
