<h1>Editar usuario</h1><br>
<form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')


    <label >Nombre:
        <input type="text" name="name" value="{{$user->name}}">
    </label><br>
    <label >Email:
        <input type="email" name="email" value="{{$user->email}}">
    </label><br>
    <label >Contraseña:
        <input type="text" name="password"  value="{{$user->password}}">
    </label><br><br>
    <button>Editar</button>

</form>
