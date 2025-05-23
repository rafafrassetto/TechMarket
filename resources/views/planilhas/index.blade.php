<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Músicas</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        background-color: #f5f6fa;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        width: 250px;
        background-color: #2c3e50;
        padding: 20px;
        color: white;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
        font-size: 24px;
        margin-bottom: 30px;
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #34495e;
    }

    .menu-item {
        list-style: none;
        margin: 15px 0;
        transition: 0.3s;
    }

    .menu-item a {
        color: #ecf0f1;
        text-decoration: none;
        padding: 12px;
        display: block;
        border-radius: 5px;
        transition: 0.3s;
    }

    .menu-item a:hover {
        background-color: #34495e;
        transform: translateX(5px);
    }

    .main-content {
        margin-left: 250px;
        padding: 30px;
    }

    .header {
        font-size: 28px;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .menu-item a i {
        margin-right: 10px;
        width: 20px;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 70px;
        }

        .sidebar .logo span {
            display: none;
        }

        .menu-item a {
            text-align: center;
            padding: 15px 0;
        }

        .menu-item a i {
            margin-right: 0;
            font-size: 20px;
        }

        .menu-item a span {
            display: none;
        }

        .main-content {
            margin-left: 70px;
        }
    }

    hr {
        border: 0;
        border-top: 2px solid rgba(128, 128, 128, 0.3);
        /* Barra cinza com transparência */
        margin: 20px 0;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="sidebar">
        <div class="logo">
            <a href="http://techshop.wuaze.com/" style="text-decoration: none; color: white;">
                <i class="fas fa-cube"></i>
                <span>TechShop</span>
            </a>
        </div>

        <ul>
            <li class="menu-item">
                <a href="/resources\views\musica\index.blade.php">
                    <i class="fas fa-music"></i>
                    <span>Música</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="/resources\views\planilhas\index.blade.php">
                    <i class="fas fa-table"></i>
                    <span>Planilhas</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="main-content">
        <div class="header">
        </div>
        <div class="content">
            <h1>Escolha sua Planilha</h1>
            <hr>
        </div>
    </div>
</body>

</html>