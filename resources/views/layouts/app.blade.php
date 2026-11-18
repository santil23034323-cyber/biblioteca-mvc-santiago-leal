
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo') | Biblioteca de Santiago</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f1f1;
            margin: 0;
            color: #292323;
        }

        header {
            background: #292020;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #513333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #eee5e5;
        }

        footer {
            background: #292020;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Biblioteca de Santiago</h1>
        <p>Un rincón para los amantes del terror y el misterio</p>
    </header>

    <nav>
        <a href="{{ route('libros.index') }}">Libros</a>
        <a href="{{ route('categorias.index') }}">Categorías</a>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        Santiago Leal · Ficha 3478025 · 2026
    </footer>

</body>
</html>
