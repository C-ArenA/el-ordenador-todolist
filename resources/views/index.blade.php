<form action="{{ route('user.delete')}}" method="POST">
    @csrf
    @method('DELETE')
    <label for="user_id">ID del Usuario:</label>
    <input type="number" name="id" id="user_id" placeholder="Introduce el ID" required>
    <button type="submit">Eliminar Usuario</button>
    
</form>
