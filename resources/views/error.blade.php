@extends('layout')

@section('title', 'Error')

@section('conteudo')

<div class="container mt-5">
    <div class="alert alert-danger">
        <h2 class="alert-heading">Erro!</h2>
        <p>{{ $error }}</p> 
    </div>
    <a href="{{ route('home') }}">
        <button type="submit">Home</button>
    </a>
</div>

@endsection