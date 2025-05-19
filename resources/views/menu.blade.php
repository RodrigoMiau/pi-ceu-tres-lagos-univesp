@extends('layout')

@section('header')
    <header class="bg-white shadow mb-5">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/" title="Céu Três Lagos"><img src="/images/logo-prefeitura.png" alt="Prefeitura de SP" class="h-10"></a>
            </div>
            <input type="text" placeholder="CÉU TRÊS LAGOS: Pesquisar" class="hidden md:block md:px-4 md:py-2 md:border md:rounded-xl md:w-3/5">
            <div class="space-x-4">
                <a href="#eventos-hoje" class="text-red-500 font-semibold">Eventos</a>
                <a href="/login" class="text-gray-600 hover:underline hover:text-red-500">Login</a>
            </div>
        </div>
    </header>
@endsection