
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalhes da Autor</h1>

    <div class="card">
        <div class="card-header">
            Autor: {{ $Author->name }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $Author->id }}</p>
            <p><strong>Nome:</strong> {{ $Author->name }}</p>
        </div>
    </div>

    <a href="{{ route('Author.index') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
@endsection

