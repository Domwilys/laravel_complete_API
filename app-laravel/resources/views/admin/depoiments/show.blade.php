<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('css/show.css') }}"> --}}
        <title>Show one data by id</title>
    </head>
    <body>

        @extends('admin/layouts/app')

        @section('header')
            <h1 class="text-3xl text-black-500 flex justify-center">Detalhes do depoimento {{ $depoiment -> id }}</h1>
        @endsection

        @section('content')
            @include('admin.depoiments.partials.showContent', compact('depoiment'))
        @endsection

        {{-- <div class="detalhes">
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
            </div> --}}
        </form>
    </body>
</html>
