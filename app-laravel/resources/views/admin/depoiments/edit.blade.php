<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('css/edit.css') }}"> --}}
        <title>Edit data</title>
    </head>
    <body>

        @extends('admin/layouts/app')

        @section('header')
            <h1 class="text-3xl text-black-500 flex justify-center">Editar depoimento {{ $depoiment -> id }}</h1>
        @endsection

        @section('content')
            <x-alert/>

            <div class="edit_form">
                <form action="{{ route('depoiments.update', $depoiment -> id) }}" method="POST">
                    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                    {{-- <input type="text" value="PUT" name="_method"> --}}
                    @method('PUT')
                    @include('admin.depoiments.partials.form', [
                        'nome' => $depoiment
                    ])
                </form>
            </div>
        @endsection
    </body>
</html>
