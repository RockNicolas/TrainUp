<div x-data="{ open: false }" class="w-64 h-screen bg-gray-800 text-white p-4">
    <h2 class="text-lg font-bold mb-4">Menu</h2>
    <ul class="space-y-2">
        <li>
            <a href="#" class="block hover:bg-gray-700 p-2 rounded"
               wire:click="$emit('changePage', 'home')">
                Home
            </a>
        </li>
        <li>
            <a href="#" class="block hover:bg-gray-700 p-2 rounded"
               wire:click="$emit('changePage', 'perfil')">
                Perfil
            </a>
        </li>
        <li>
            <a href="#" class="block hover:bg-gray-700 p-2 rounded"
               wire:click="$emit('changePage', 'config')">
                Configurações
            </a>
        </li>
        <li>
            <button @click="open = true" class="block w-full text-left hover:bg-gray-700 p-2 rounded">
                Sair
            </button>
        </li>
    </ul>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg text-gray-900 w-80">
            <h2 class="text-lg font-bold mb-4">Deseja realmente sair?</h2>
            <div class="flex justify-end space-x-4">
                <button @click="open = false" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Não
                </button>
                <button @click="window.location.href='/logout'" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Sim
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
