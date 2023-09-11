<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit data</title>
    </head>
    <body>
        <h1>Editar dúvida {{ $support -> id }}</h1>

        <form action="{{ route('supports.update', $support -> id) }}" method="POST">
            {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
            @csrf() 
            {{-- <input type="text" value="PUT" name="_method"> --}}
            @method('PUT')
            <input type="text" placeholder="Assunto" name="subject" value="{{ $support -> subject}}">
            <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support -> body }}</textarea>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>