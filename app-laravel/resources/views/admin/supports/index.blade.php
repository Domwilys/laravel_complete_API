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
        <h1 id="listagem_title">Listagem dos suportes</h1>
        <a id="criar_duvida" href="{{ route('supports.create') }}">Criar dúvida</a>
        

        <table class="data_table">
            <thead>
                <th>ID</th>
                <th>Assunto</th>
                <th>Status</th>
                <th>Description</th>
            </thead>
            <tbody>
                @foreach($supports as $support)
                    <tr>
                        <td>{{ $support['id'] }}</td>
                        <td>{{ $support['subject'] }}</td>
                        <td>{{ $support['status'] }}</td>
                        <td>{{ $support['body'] }}</td>
                        <td>
                            <a id="veja_mais" href="{{ route('supports.show', $support['id']) }}">Veja mais!</a>
                            <br>
                            <a id="editar" href="{{ route('supports.edit', $support['id']) }}">Editar</a>
                            <form action="{{ route('supports.delete', $support['id']) }}" method="POST">
                                @csrf()
                                @method('DELETE')
                                <div id="delete_button">
                                    <button type="submit">Deletar</button>
                                </div>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>