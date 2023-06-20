
<a href="{{ route('supports.create') }}">Criar nova dúvida</a>


<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="py-1">Assunto</th>
                        <th scope="col" class="py-1">Status</th>
                        <th scope="col" class="py-1">Descrição</th>
                        <th scope="col" class="py-1">Ações</th>
                        <th scope="col" class="py-1">Detalhes</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($supports->items() as $support)
                            <tr>
                                <td class="whitespace-nowrap py-1">{{ $support->subject }}</td>
                                <td class="whitespace-nowrap py-1">
{{--                                <span class="{{ $support->status === 'A' ? 'bg-gray-400 text-green-200 rounded-3xl text-sm py-0.5 px-3' : '' }}">--}}
{{--                                    {{ getStatusSupport($support->status) }}--}}
{{--                                </span>--}}
                                    <x-status-support :status="$support->status" />
                                </td>
                                <td class="whitespace-nowrap py-1">{{ $support->body }}</td>

                                <td class="flex gap-x-3 py-1">
                                    <a class="bg-blue-600 rounded px-3" href="{{ route('supports.edit', $support->id) }}">Editar</a>|
                                    <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                                        @csrf()
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 rounded px-3">Deletar</button>
                                    </form>
                                </td>
                                <td class="whitespace-nowrap py-1">
                                    <a href="{{ route('supports.show', $support->id) }}">
                                        Detalhes
                                        <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
