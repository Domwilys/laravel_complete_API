@csrf()
<div class="flex items-center justify-center h-screen pb-40">
    <div class="w-full max-w-2xl">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nome">
            Nome
            </label>
            <input name="nome" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Digite seu nome" value="{{ $depoiment -> nome ?? old('nome') }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
            </label>
            <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Digite seu email" value="{{ $depoiment -> email ?? old('email') }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ocupacao">
            Ocupação
            </label>
            <input name="ocupacao" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Digite sua ocupação" value="{{ $depoiment -> ocupacao ?? old('ocupacao') }}">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">
            Depoimento
            </label>
            <textarea name="depoimento" cols="30" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Digite seu depoimento">{{ $depoiment -> depoimento ?? old('depoimento') }}</textarea>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Enviar
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('depoiments.index') }}">
            Voltar
            </a>
        </div>
        </form>
        {{-- <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
        </p> --}}
    </div>
</div>
