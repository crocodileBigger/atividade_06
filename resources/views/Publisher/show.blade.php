
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalhes da Categoria</h1>

    <div class="card">
        <div class="card-header">
            publicador: {{ $Publisher->name }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $Publisher->id }}</p>
            <p><strong>Nome:</strong> {{ $Publisher->name }}</p>
        </div>
    </div>

    <a href="{{ route('Publisher.index') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
@endsection

