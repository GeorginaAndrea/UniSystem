<div>
    @if($show)
        <x-jet-dialog-modal wire:model="show">
            <x-slot name="title">Conflicto de sesión</x-slot>

            <x-slot name="content">
                Ya tienes una sesión activa en otro dispositivo. ¿Qué deseas hacer?
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="cancelNewSession">
                    Cancelar esta sesión
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="keepNewSession">
                    Cerrar otras sesiones y continuar
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    @endif
</div>
