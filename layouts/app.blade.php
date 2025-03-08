<!DOCTYPE html>
<html lang="pt-BR">

<div class="sidebar">
    <a href="{{ route('musica.index') }}" class="{{ request()->routeIs('musica.index') ? 'active' : '' }}">Música</a>
    <a href="{{ route('planilhas.index') }}"
        class="{{ request()->routeIs('planilhas.index') ? 'active' : '' }}">Planilhas</a>
</div>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ERP')</title>
    <!-- Inclua seus arquivos CSS aqui -->
    <style>
    body {
        display: flex;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .sidebar {
        width: 200px;
        background-color: #333;
        color: #fff;
        height: 100vh;
        position: fixed;
        padding-top: 20px;
    }

    .sidebar a {
        display: block;
        color: #fff;
        padding: 10px 15px;
        text-decoration: none;
    }

    .sidebar a:hover {
        background-color: #575757;
    }

    .content {
        margin-left: 200px;
        padding: 20px;
        width: 100%;
    }

    .active {
        background-color: #575757;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="{{ route('musica.index') }}">Música</a>
        <a href="{{ route('planilhas.index') }}">Planilhas</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>