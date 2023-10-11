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

        @section('title', 'Supports')

        @section('header')
            @include('admin.supports.partials.header', compact('supports'))
        @endsection

        @section('content')

            @include('admin.supports.partials.content', compact('supports'))

            {{-- <table class="data_table">
                <thead>
                    <th>ID</th>
                    <th>Assunto</th>
                    <th>Status</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    @foreach($supports -> items() as $support)
                        <tr>
                            <td>{{ $support -> id }}</td>
                            <td>{{ $support -> subject }}</td>
                            <td>{{ $support -> status }}</td>
                            <td>{{ $support -> body }}</td>
                            <td>
                                <a id="veja_mais" href="{{ route('supports.show', $support -> id) }}">Veja mais!</a>
                                <br>
                                <a id="editar" href="{{ route('supports.edit', $support -> id) }}">Editar</a>
                                <form action="{{ route('supports.delete', $support -> id) }}" method="POST">
                                    @csrf()
                                    @method('DELETE')
                                    <div id="delete_button">
                                        <button type="submit">Deletar</button>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}
            <x-pagination :paginator="$supports" :appends="$filters"/>

        @endsection
    </body>
</html>
