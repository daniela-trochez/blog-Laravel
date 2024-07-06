<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Registro de Usuarios</h2>

    <a href="{{route('users.create')}}">Crear Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombr</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('users.show',$user->id)}}">Detalles</a>
                    <a href="{{route('users.edit',$user->id)}}">Edit</a>
                    <form action="{{route('users.destroy',$user->id)}} " method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button >Eliminar</button>
                    </form>
                </td>
            </tr>


            @endforeach

        </tbody>
    </table>



</body>
</html>
