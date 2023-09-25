<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
        <title>Create data</title>
    </head>
    <body>
        <h1 id="create_title">Nova dúvida</h1>

        <div class="create_form">

            <div id="error_div">
                @if ($errors -> any()) 
                    @foreach($errors -> all() as $error)
                        <h4 id="error">{{ $error }}</h4>
                    @endforeach
                @endif
            </div>
            <form action="{{ route('supports.store') }}" method="POST">
                {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                @csrf() 
                <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
                <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>