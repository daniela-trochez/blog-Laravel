<h1>Mostrar detalles </h1>

<p><strong>id: </strong> {{$user->id}}</p>
<p><strong>Nombre: </strong> {{$user->name}}</p>
<p><strong>Email: </strong> {{$user->email}}</p>
<p><strong>Contraseña: </strong> {{$user->password}}</p>

<a href="{{route('users.index')}}">Volver</a>
