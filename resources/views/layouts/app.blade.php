<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('icons/icon.png') }}" type="image/x-icon">
  <title>TrainUp</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="{{ asset('Css/Header/Header.css') }}" rel="stylesheet">
  <script src="{{ asset('Js/Header/Header.js') }}" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue">
  <header class="h-16 flex items-center justify-between p-0 px-5 fixed top-0 left-0 w-full z-50 bg-gradient-to-r from-gray-900 to-gray-700">
    <div class="logo-container" onclick="toggleMenu()">
        <img id="logo" class="rotate transition-transform duration-500 ease-in-out" src="{{ asset('icons/Icon.png') }}" alt="Ícone" width="52" height="52">
    </div>
    <div class="relative">
      <button class="flex items-center text-white focus:outline-none" onclick="toggleDropdown()">
        <i class="fas fa-user-circle text-2xl mr-2"></i>
        <!-- CRIADO PARA VER A VERIFICAÇÃO DE AUTH(TESTE) -->
        @if(Auth::check())
          <span>{{ Auth::user()->cnomeusua }}</span>
        @else
          <span>Usuário não autenticado</span>
        @endif
      </button>

      
      </div> 
    </div>
  </header>
  <div class="mt-16">
    @yield('content') 
  </div>
</body>
</html>