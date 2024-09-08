@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
    }

    p {
        font-size: 1rem;
        color: #555;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    strong {
        color: #333;
    }

    .btn-secondary {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        color: white;
        background-color: black;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

</style>

<br>
<div class="container">
    <h1>Dados do cliente</h1>
    @if($post)
    <p><strong>Nome:</strong> {{ $post->title }}</p>
    <p><strong>Endereço:</strong> {{ $post->body }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Voltar</a>
    @else
    <p>Post not found</p>
    @endif
</div>
@endsection
