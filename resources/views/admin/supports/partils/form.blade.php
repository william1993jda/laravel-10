@csrf
<input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject ?? old('subject') }}">
<textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea>
<button type="submit">Enviar</button>
