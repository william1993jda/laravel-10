
<h1>Detalhes da dúvida:
    <strong style="color: red">
        {{ $support->subject }}
    </strong>
</h1>

<ul>
    <li>
        {{ $support->subject }}
    </li>
    <li>
        {{ $support->body }}
    </li>
    <li>
        {{ $support->status }}
    </li>
</ul>

<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Deletar</button>
</form>
