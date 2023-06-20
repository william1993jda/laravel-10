@extends('admin.layouts.app')

@section('title', 'Detalhes')

@section('header')
    <h1 class="text-center my-5">Detalhes da dúvida:
        <strong style="color: red">
            {{ $support->subject }}
        </strong></h1>
@endsection

@section('content')

<div class="flex justify-center flex-col">
    <div class="w-full text-center">
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
    </div>
    <form class="w-full text-center"  action="{{ route('supports.destroy', $support->id) }}" method="post">
        @csrf()
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Deletar</button>
    </form>
</div>
@endsection
