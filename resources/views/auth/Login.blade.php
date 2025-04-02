<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('Images/Icons/Gym.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('Js/Login/Login.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-gradient-to-r bg-[#1c1c1c]">
    <div class="flex w-4/5 h-4/5 bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="w-1/2 flex flex-col justify-center items-center px-12 bg-gray-200 rounded-1-2xl">
            <img src="https://sdmntpreastus2.oaiusercontent.com/files/00000000-58a0-51f6-9986-33373feb2854/raw?se=2025-04-02T02%3A47%3A34Z&sp=r&sv=2024-08-04&sr=b&scid=95f8136d-b8e8-53d3-a838-a1c9b43131e1&skoid=ac1d63ad-0c69-4017-8785-7a50eb04382c&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-04-01T23%3A40%3A03Z&ske=2025-04-02T23%3A40%3A03Z&sks=b&skv=2024-08-04&sig=zsex/0ZxHxF4EV%2Bx5fq5vu99umVHPns1gyCv%2BgUAl7M%3D" alt="logo" class="w-12 mb-4">
            <h2 class="text-2x1 font-bold text-gray-800 mb-2">Bem-Vindo, Personal Trainer!</h2>
            <p class="text-gray-600 mb-6">Acesse sua conta para gerenciar seus alunos.</p>

            <form action="{{ url('login') }}" method="POST" class="w-full relative">
                @csrf

                <div class="mb-4 flex justify-center">
                    <div class="w-80">
                        <label for="username" class="block text-gray-700 text-sm">Usuário</label>
                        <input type="text" name="username" id="username" required
                            class="w-full h-10 p-4 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                </div>

                <div class="mb-4 flex justify-center">
                    <div class="w-80 relative">
                        <label for="senha" class="block text-gray-700 text-sm">Senha</label>
                        <input type="password" name="senha" id="senha" required
                            class="w-full h-10 p-4 pr-12 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <i id="togglePassword" class="fas fa-eye absolute right-3 top-8 text-gray-500 cursor-pointer"></i>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-80">
                        <button type="submit"
                            class="w-full py-3 bg-yellow-500 text-black font-semibold rounded-md hover:bg-yellow-600 transition">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="w-1/2 bg-[#FFE37D] text-[#1c1c1c] flex flex-col justify-center items-center text-center px-10 rounded-r-2xl relative">
        <p class="text-2xl self-start pl-2">Acompanhe o progresso dos seus alunos!</p>
    <h1 class="text-6xl font-bold tracking-[15px]">ACADEMIA</h1>
    <p class="text-xl mt-2 self-end pr-20">Seu espaço, sua força!</p>
        </div>
    </div>
</body>
</html>