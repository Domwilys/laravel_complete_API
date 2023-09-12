<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Listagem dos supports</title>
    </head>
    <body>
        <h1>Listagem dos suportes</h1>
        <a href="{{ route('supports.create') }}">Criar dúvida</a>

        <table>
            <thead>
                <th>id</th>
                <th>assunto</th>
                <th>status</th>
                <th>description</th>
            </thead>
            <tbody>
                @foreach($supports as $support)
                    <tr>
                        <td>{{ $support->id }}</td>
                        <td>{{ $support->subject }}</td>
                        <td>{{ $support->status }}</td>
                        <td>{{ $support->body }}</td>
                        <td>
                            <a href="{{ route('supports.show', $support -> id) }}">Veja mais!</a>
                            <a href="{{ route('supports.edit', $support -> id) }}">Editar</a>
                            <form action="{{ route('supports.delete', $support -> id) }}" method="POST">
                                @csrf()
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>