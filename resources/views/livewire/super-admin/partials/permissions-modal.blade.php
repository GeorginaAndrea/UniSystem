<!-- Modal de Permisos -->
<div class="modal fade @if($showPermissionsModal) show @endif" 
     id="permissionsModal" tabindex="-1" 
     aria-labelledby="permissionsModalLabel" aria-hidden="true" 
     style="display: @if($showPermissionsModal) block @else none @endif;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="permissionsModalLabel">Permisos de: {{ $currentUserName }}</h5>
                <button type="button" class="btn-close" wire:click="$set('showPermissionsModal', false)" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    @foreach ($currentUserPermissions as $permission)
                        <li class="list-group-item d-flex justify-content-between">
                            {{ $permission }}
                            <button class="btn btn-danger btn-sm" wire:click="preparePermissionRemoval('{{ $permission }}')">Eliminar</button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="$set('showPermissionsModal', false)">Cerrar</button>
            </div>
        </div>
    </div>
</div>
