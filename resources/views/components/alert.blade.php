<div class="alert alert-danger bg-red-300 rounded">
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
</div>
