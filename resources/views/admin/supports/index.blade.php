@extends('admin.layouts.app')

@section('title', 'Suportes')

@section('header')
    @include('admin.layouts.partils.header')
@endsection

@section('content')
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">Detalhes</a>
                </td>
                <td>
                    <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('supports.create') }}">Criar nova dúvida</a>

<x-pagination :paginator="$supports" :appends="$filters"/>
@endsection
