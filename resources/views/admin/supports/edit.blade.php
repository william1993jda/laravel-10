<h1>
    Dúvida:
    <strong>
        {{ $support->subject }}
    </strong>
</h1>
@if($errors->any())
    @foreach($errors->all() as $error)
        <span style="background-color: #fa7474; color: white; padding: 10px; border-radius: 8px">
            {{ $error }}
        </span>
        </br>
        </br>
    @endforeach
@endif
<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>
