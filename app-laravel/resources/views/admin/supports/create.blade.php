<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('css/create.css') }}"> --}}
        <title>Create data</title>
    </head>
    <body>

        <style>
            body {
                overflow: hidden
            }
        </style>

        @extends('admin/layouts/app')

        @section('header')
            <h1 class="text-3xl text-black-500 flex justify-center">Nova dúvida</h1>
        @endsection

        @section('content')

            <x-alert/>

            <div class="create_form">
                <form action="{{ route('supports.store') }}" method="POST">
                    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                    @include('admin.supports.partials.form')
                </form>
            </div>

        @endsection

    </body>
</html>
