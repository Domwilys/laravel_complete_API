@if ($errors -> any())
    <div class="flex justify-center pt-4">
        <div class="p-2 bg-blue-500 items-center text-white leading-none lg:rounded-full lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
        @foreach($errors -> all() as $error)
            <span class="font-semibold mr-2 text-left flex-auto">{{ $error }}</span>
        @endforeach
        </div>
    </div>
@endif
