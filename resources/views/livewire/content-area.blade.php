<div>
    @if ($page === 'menu')
        @includeIf('livewire.pages.menu')
    @elseif ($page === 'perfil')
        @includeIf('livewire.pages.perfil')
    @elseif ($page === 'config')
        @includeIf('livewire.pages.config')
    @endif
</div>
