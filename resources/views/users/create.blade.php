<h1>Formulario para crear usuario</h1><br>
<form action="{{route('users.store')}} " method="POST">
    @csrf

    <label >Nombre:
        <input type="text" name="name" required>
    </label><br>
    <label >Email:
        <input type="email" name="email" required
    </label><br>
    <label >Contraseña:
        <input type="text" name="password" required>
    </label><br><br>
    <button>Enviar</button><br>


</form>


<a href="{{route('users.index')}}">Volver</a>
