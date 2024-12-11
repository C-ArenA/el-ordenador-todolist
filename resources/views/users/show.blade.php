Información sobre el usuario {{ $user->name }}:
<ul>
    <li>ID: {{$user->id}}</li>
    <li>Nombre: {{$user->name}}</li>
    <li>Email: {{$user->email}}</li>
</ul>


@if (session('success_update'))
    <div class="alert alert-success">
        {{ session('success_update') }}
    </div>
@endif

<br>
<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar Usuario</button>
</form>
<br>
<a href="{{route('users.edit', $user->id)}}">Editar Usuario</a>
<br>
<a href="{{route('users.index')}}">Atras</a><br>
