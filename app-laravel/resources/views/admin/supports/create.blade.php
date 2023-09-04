<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create data</title>
    </head>
    <body>
        <h1>Nova dúvida</h1>
        <form action="{{ route('supports.store') }}" method="POST">
            {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
            @csrf() 
            <input type="text" placeholder="Assunto" name="subject">
            <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>