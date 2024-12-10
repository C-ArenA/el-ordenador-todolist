Formulario para la creacion de un nuevo usuario:
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nombre:" required>
    <input type="email" name="email" id="email" placeholder="Email:" required>
    <input type="password" name="password" id="password" placeholder="Contraseña:" required>
    <button type=submit>Enviar</button>
</form>
