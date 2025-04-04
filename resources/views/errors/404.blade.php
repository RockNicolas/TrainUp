<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('icons/icon.png') }}" type="image/x-icon">
    <link href="{{ asset('css/Errors/Errors.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Página Não Encontrada - 404</title>
</head>
<body class="bg-gradient-to-r from-gray-900 to-gray-500 h-screen flex justify-center items-center">
    <div class="text-center p-20 bg-white bg-opacity-90 rounded-lg shadow-lg max-w-xl">
        <h1 class="text-7xl font-bold animated-text mb-5">404</h1>
        <p class="text-2xl text-gray-600 mb-5">A página que você procurou não foi encontrada.</p>
        <a href="{{ url('/home') }}" class="custom-button text-yellow-500 hover:text-white">
            Voltar para a página inicial
        </a>
    </div>
</body>
</html>
