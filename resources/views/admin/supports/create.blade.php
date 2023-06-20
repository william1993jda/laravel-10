
@extends('admin.layouts.app')

@section('header')
    <h1 class="text-center my-5">Nova dúvida</h1>
@endsection
@section('title', 'Criar novo suporte')

@section('content')

<div class="flex justify-center flex-col">
    <x-alert class="my-5 text-red-400" />
    <form class="w-full" action="{{ route('supports.store') }}" method="post">
        <div class="flex flex-col gap-3 mt-5">
            @include('admin.supports.partils.form')
        </div>
    </form>

</div>

@endsection
