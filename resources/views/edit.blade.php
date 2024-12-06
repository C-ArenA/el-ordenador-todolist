<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nombre del usuario del cual se modificara:{{ $user->name }}
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name"value="{{ $user->name }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">Modificar</button>
</form>
