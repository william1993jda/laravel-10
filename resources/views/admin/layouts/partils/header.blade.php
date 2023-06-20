<header>
    <div class="flex items-center gap-x-3 mt-5">
        <h1 class="text-lg text-black-500">Fórum</h1>
        <div class="flex items-center">
            <span class="flex items-center justify-center px-3 py-1 text-blue-600 bg-black rounded-2xl text-xs">
                {{ $supports->total() }} {{ $supports->total() > 1 ? 'dúvidas': 'dúvida' }}
            </span>
        </div>
    </div>

    <div class="search flex items-center gap-x-3 mt-5 justify-between">
        <form action="{{ route('supports.index') }}" method="get">
            @csrf
            <label>Pesquisar</label>
            <input class="bg-black text-xs text-blue-600 px-2 py-1 rounded-2xl" type="text" name="filter" autofocus placeholder="Pesquisar" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit">Go</button>
            <br>
        </form>
    </div>
    <a href="{{ route('supports.create') }}" class="flex place-items-baseline justify-center px-1 gap-x-3 py-1 text-blue-600
    bg-black hover:bg-blue-500 hover:text-black my-5 rounded-2xl text-xs w-1/2">
        Criar nova dúvida <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
    </a>
    @if($filters['filter'])
        <a href="{{ route('supports.index') }}" class="gap-x-3 my-5">
            <i class="fa-solid fa-angle-left" style="color: #ffffff;"></i>
            Ver todos
        </a>
    @endif
</header>
