<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Histórico</title>

    <!-- Fonte elegante do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f2f2f2;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header {
            background-color: #005eb8;
            color: white;
            padding: 25px 0;
            text-align: center;
            font-size: 1.6em;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        main {
            max-width: 1100px;
            margin: 40px auto;
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.08);
        }

        h1, h2, h3 {
            color: #222;
            font-weight: 400;
            margin-top: 0;
        }

        .catalogo {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        .item {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 15px;
            width: 280px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.07);
            transition: transform 0.2s ease;
        }

        .item:hover {
            transform: scale(1.03);
        }

        .item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .item h3 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        .item p {
            margin: 8px 0;
            font-size: 0.95em;
            color: #555;
        }

        a {
            color: #005eb8;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        input, select, textarea, button {
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            font-family: 'Roboto', sans-serif;
        }

        button {
            background-color: #005eb8;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #004b95;
        }

        .erro {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo de Curiosidades Históricas</h1>
    </header>
    <main>
