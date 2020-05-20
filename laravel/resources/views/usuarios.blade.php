<h1>Lista de Usuarios</h1>

<table border=1>
    @foreach ($users as $user)
        <tr>
            <td><p>ID: {{ $user->id }} </p></td>
            <td><p>Nome: {{ $user->name }} </p></td>
            <td><p>Email: {{ $user->email }} </p></td>
        </tr>
    @endforeach



</table>
