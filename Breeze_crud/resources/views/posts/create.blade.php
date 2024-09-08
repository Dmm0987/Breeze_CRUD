@extends('layouts.app')

@section('content')
<style>
    *{
        font-family: Georgia, serif;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 2rem;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: white;
    }

    .form-group input[type="text"],
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 1rem;
    }

    .form-group input[type="text"]:focus,
    .form-group textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn-primary {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        color: #000;
        background-color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #000;
        color: white;
    }

    @media (max-width: 768px) {
        .container {
            padding: 10px;
        }

        .form-group input[type="text"],
        .form-group textarea {
            font-size: 0.875rem;
        }

        button {
            font-size: 0.875rem;
            padding: 8px 16px;
        }
    }

</style>

<div class="container">
    <h1>Cadastro de cliente</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite o nome do cliente" required>
        </div>
        <div class="form-group">
            <label for="body" class="text">Endereço</label>
            <textarea class="form-control" id="body" name="body" rows="3" placeholder="Digite o endereço" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
