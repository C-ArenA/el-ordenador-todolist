<h2>Lista de Usuarios</h2>

@if (session('success_create'))
    <div class="alert alert-success">
        {{ session('success_create') }}
    </div> <br>
@endif

@if (session('success_eliminate'))
    <div class="alert alert-success">
        {{ session('success_eliminate') }}
    </div> <br>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table><br>

<a href="{{ route('users.create') }}">Crear Nuevo Usuario</a><br><br>

Mostrar usuario:

<form id="showUserForm" method="GET">
    <input type="text" id="id" placeholder="Introduce el ID:" required>
    <button type="submit">Mostrar Usuario</button> 
</form>
<!-- Tampoco pude enviar un parametro de manera dinamica sin un script :( -->
<script>
    document.getElementById('showUserForm').addEventListener('submit', function (event) {
        var id = document.getElementById('id').value; //Tuve un pequeño gran problema a la hora de establecer el URL 
        this.action = "{{ url('users') }}/" + id;     //http://localhost/el-ordenador-todolist/public/users/12? no pude enviar la URL sin ?
    });
</script>

