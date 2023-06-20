@extends('admin.layouts.app')

@section('title', 'Editar dúvida')

<h1>
    Dúvida:
    <strong>
        {{ $support->subject }}
    </strong>
</h1>

<x-alert />

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @method('put')
    @include('admin.supports.partils.form', [
    'support' => $support
])
</form>
