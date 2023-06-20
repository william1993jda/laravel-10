@extends('admin.layouts.app')

@section('title', 'Suportes')

@section('header')
    @include('admin.layouts.partils.header')
@endsection

@section('content')
@include('admin.layouts.partils.content')

<x-pagination :paginator="$supports" :appends="$filters"/>
@endsection
