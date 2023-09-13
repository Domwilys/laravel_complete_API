<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/show.css') }}">
        <title>Show one data by id</title>
    </head>
    <body>
        <h1 id="detalhes_title">Detalhes da dúvida {{ $support -> id }}</h1>

        <div class="detalhes">
            <ul>
                <li>Assunto: {{ $support -> subject }}</li>
                <li>Status: {{ $support -> status }}</li>
                <li>Descrição: {{ $support -> body }}</li>
            </ul>
        </div>
        <a id="editar" href="{{ route('supports.edit', $support -> id) }}">Editar</a>
        <form action="{{ route('supports.delete', $support -> id) }}" method="POST">
            @csrf()
            @method('DELETE')
            <div id="delete_button">
                <button type="submit">Deletar</button>
            </div>
        </form>
    </body>
</html>