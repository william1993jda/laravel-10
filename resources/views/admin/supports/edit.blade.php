@extends('admin.layouts.app')

@section('title', 'Editar dúvida')

@section('content')
<h1>
    Dúvida:
    <strong>
        {{ $support->subject }}
    </strong>
</h1>

<div class="flex justify-center flex-col">
    <form action="{{ route('supports.update', $support->id) }}" method="post">
        @method('put')
        @include('admin.supports.partils.form', [
        'support' => $support
    ])
    </form>
</div>
<x-alert />
@endsection
