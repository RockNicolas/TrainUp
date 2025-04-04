<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="{{ asset('icons/icon.png') }}" type="image/x-icon">
  <link href="{{ asset('css/Login/Login.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="{{ asset('Js/Login/Login.js') }}" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-gradient-to-r from-gray-900 to-gray-700">
  <div id="container" class="relative w-4/5 h-4/5 bg-white rounded-2xl shadow-lg overflow-hidden flex transition-all">
    <div class="form-panel w-1/2 flex flex-col justify-center items-center px-12 bg-gray-200 transition-all">
      <div class="login-form">
      <i class="fas fa-dumbbell text-6xl text-yellow-500 mb-6 flex justify-center"></i>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Bem-Vindo, Personal Trainer!</h2>
        <p class="text-gray-600 mb-6">Acesse sua conta para gerenciar seus alunos.</p>
        <form action="{{ url('login') }}" method="POST" class="w-full">
          @csrf
          <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm">Usuário</label>
            <input type="text" name="username" id="username" required
              class="w-full h-10 p-4 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
          </div>
          <div class="mb-4 relative">
            <label for="senha" class="block text-gray-700 text-sm">Senha</label>
            <input type="password" name="senha" id="senha" required
              class="w-full h-10 p-4 pr-12 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
              <i id="togglePassword" class="fas fa-eye absolute right-3 top-8 text-gray-500 cursor-pointer"></i>
          </div>
          <button type="submit"
            class="w-full py-3 bg-yellow-500 text-black font-semibold rounded-md hover:bg-yellow-600 transition">
            Entrar
          </button>
          <p class="text-sm text-center mt-4">
            Não tem uma conta?
            <button type="button" onclick="toggleForm()" class="text-yellow-500 font-semibold">
              Cadastre-se
            </button>
          </p>
        </form>
      </div>

      <div class="register-form hidden">
        <i class="fas fa-dumbbell text-6xl text-yellow-500 mb-6 flex justify-center"></i>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Crie sua Conta</h2>
        <p class="text-gray-600 mb-6">Registre-se para acessar a plataforma.</p>
        <form action="{{ url('register') }}" method="POST" class="w-full">
          @csrf
          <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm">Nome</label>
            <input type="text" name="name" id="name" required
              class="w-full h-10 p-4 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
          </div>
          <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm">E-mail</label>
            <input type="email" name="email" id="email" required
              class="w-full h-10 p-4 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
          </div>
          <div class="mb-4 relative">
            <label for="password" class="block text-gray-700 text-sm">Senha</label> 
            <input type="password" name="password" id="password" required
                class="w-full h-10 p-4 pr-12 border border-gray-400 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                <i id="toggleRegisterPassword" class="fas fa-eye absolute right-4 top-1/2 transform -translate-y-3/6 text-gray-500 cursor-pointer"></i>
          </div>

          <button type="submit"
            class="w-full py-3 bg-yellow-500 text-black font-semibold rounded-md hover:bg-yellow-600 transition">
            Cadastrar
          </button>
          <p class="text-sm text-center mt-4">
            Já tem uma conta?
            <button type="button" onclick="toggleForm()" class="text-yellow-500 font-semibold">
              Faça login
            </button>
          </p>
        </form>
      </div>
    </div>

    <div class="message-panel w-1/2 bg-[#FFE37D] text-[#1c1c1c] flex flex-col justify-center items-center text-center px-10 rounded-r-2xl transition-all">
      <div class="login-message">
        <p class="text-2xl self-start pl-2">Bem-vindo de volta!</p>
        <h1 class="text-6xl font-bold tracking-[15px]">ACESSO</h1>
        <p class="text-xl mt-2 self-end pr-20">Faça login para continuar.</p>
      </div>

      <div class="register-message hidden">
        <p class="text-2xl self-start pl-2">Olá, seja bem-vindo!</p>
        <h1 class="text-6xl font-bold tracking-[15px]">NOVO CADASTRO</h1>
        <p class="text-xl mt-2 self-end pr-20">Registre-se e inicie sua jornada.</p>
      </div>
    </div>
  </div>
</body>
</html>