<!-- Modal de Confirmación de Contraseña -->
<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordModalLabel">Confirmar Contraseña de Administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="authorizeAndExecute">
                    <div class="form-group">
                        <label for="adminPassword">Contraseña</label>
                        <input type="password" wire:model="adminPassword" id="adminPassword" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
