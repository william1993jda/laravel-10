@csrf
<div class="flex flex-col gap-x-3">
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject ?? old('subject') }}" class="bg-black p-1 rounded h-1/5 text-white my-5">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição" class="bg-black p-1 rounded h-1/5 text-white mb-5">{{ $support->body ?? old('body') }}</textarea>
    <button type="submit"class="bg-black w-1/1 py-2 rounded w-24 text-center">Enviar</button>
</div>
