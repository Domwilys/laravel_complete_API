<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
        <title>Edit data</title>
    </head>
    <body>
        <h1 id="edit_title">Editar dúvida {{ $support -> id }}</h1>

        <x-alert/>

        <div class="edit_form">
            <form action="{{ route('supports.update', $support -> id) }}" method="POST">
                {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                {{-- <input type="text" value="PUT" name="_method"> --}}
                @method('PUT')
                @include('admin.supports.partials.form', [
                    'subject' => $support
                ])
            </form>
        </div>
    </body>
</html>