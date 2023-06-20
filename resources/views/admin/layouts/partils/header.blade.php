<header>
    <div class="flex items-center gap-x-3 mt-5">
        <h1 class="text-lg text-black-500">Fórum</h1>
        <div class="flex items-center">
            <a href="{{ route('supports.create') }}" class="flex items-center justify-center px-5 py-1 text-blue-600 bg-black rounded-2xl text-xs">
                {{ $supports->total() }}
                Nova dúvida
            </a>
        </div>
    </div>
</header>
