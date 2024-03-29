<div class="flex flex-col mt-6 my-4">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full pt-20 align-middle md:px-6 lg:px-8">
            <form action="{{ route('depoiments.delete', $depoiment -> id) }}" method="POST">
                @csrf()
                @method('DELETE')
                <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-5 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Deletar
                </button>
            </form>
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <div class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                    <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">ID: {{ $depoiment -> id }}</h1>
                    <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">Nome: {{ $depoiment -> nome }}</h1>
                    <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">Email: {{ $depoiment -> email }}</h1>
                    <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">Ocupação: {{ $depoiment -> ocupacao }}</h1>
                    {{-- <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">Depoimento: {{ $depoiment -> depoimento }}</h1> --}}
                    <div class="flex flex-wrap justify-left">
                        <div class="px-4 py-2">
                            <div class="flex rounded-lg h-full flex-col">
                                <div class="flex items-center mb-3">
                                    <h2 class="text-white text-xl font-medium">Depoimento:</h2>
                                </div>
                                <div class="flex flex-col justify-between flex-grow w-full">
                                    <p class="leading-relaxed text-xl text-white">
                                        {{ $depoiment -> depoimento }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">Criado em: {{ $depoiment -> created_at }}</h1>
                    <h1 class="px-4 py-2 text-xl font-medium whitespace-nowrap dark:text-white">Atualizado em: {{ $depoiment -> updated_at }}</h1>
                </div>
            </div>
            <div class="flex items-center justify-between pt-5">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                <a href="{{ route('depoiments.edit', $depoiment->id) }}">Editar</a>
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('depoiments.index') }}">
                Voltar
                </a>
            </div>
        </div>
    </div>
</div>
