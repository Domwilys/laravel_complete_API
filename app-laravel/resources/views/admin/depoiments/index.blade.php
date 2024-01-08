<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

        @extends('admin/layouts/app')

        @section('title', 'Depoiments')

        @section('header')
            @include('admin.depoiments.partials.header', compact('depoiments'))
        @endsection

        @section('content')

            @include('admin.depoiments.partials.content', compact('depoiments'))

            <x-pagination :paginator="$depoiments" :appends="$filters"/>

        @endsection
    </body>
</html>
