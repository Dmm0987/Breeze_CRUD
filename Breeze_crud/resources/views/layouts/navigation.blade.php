<style>
.navbar {
    background-color: #1f2937;
    border-bottom: 1px solid #374151;
    padding: 0 1rem;
}

.navbar-container {
    max-width: 7xl;
    margin: 0 auto;
    padding: 0 1rem;
}

.navbar-inner {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Distribui o espaço entre os itens */
    height: 4rem;
}

.mobile-menu-button {
    display: none; /* Mantenha oculto se não for necessário */
}

.user-menu {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.user-menu a,
.user-menu button {
    padding: 0.5rem 0.75rem;
    border: 1px solid transparent;
    background-color: #4f46e5;
    color: white;
    border-radius: 0.375rem;
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    transition: color 0.2s ease, background-color 0.2s ease, border-color 0.2s ease;
    text-decoration: none;
}

.user-menu a:hover,
.user-menu button:hover {
    background-color: #4338ca;
    border-color: #e5e7eb;
}

.user-menu button {
    background-color: #ef4444;
    border: none;
    color: white;
}

.user-menu button:hover {
    background-color: #dc2626;
}

.username {
    color: white;
    margin-right: 20px;
}
</style>

<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-inner">
            <!-- Links de navegação para usuários autenticados -->
            @auth
                <div class="user-menu">
                    <a href="{{ route('posts.index') }}">
                        {{ __('Visualizar Clientes') }}
                    </a>

                    <a href="{{ route('profile.edit') }}">
                        {{ __('Inicio') }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">
                            {{ __('Deslogar') }}
                        </button>
                    </form>
                </div>
            @endauth

            <!-- Exibe o nome do usuário logado no canto direito -->
            @auth
                <div class="username">
                    {{ Auth::user()->name }}
                </div>
            @endauth
        </div>
    </div>
</nav>
