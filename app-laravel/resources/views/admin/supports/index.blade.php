<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                            >
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>