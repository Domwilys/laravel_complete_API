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

        <x-alert/>

        <div class="create_form">
            <form action="{{ route('supports.store') }}" method="POST">
                {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
                @include('admin.supports.partials.form')
            </form>
        </div>
    </body>
</html>