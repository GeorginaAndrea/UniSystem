<div>
    <!-- Mensajes de sesión -->
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Buscador -->
    <input type="text" class="form-control mb-3" placeholder="Buscar usuario..."
           wire:model.debounce.500ms="search">

    <!-- Tabla -->
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->roles->isNotEmpty())
                                    <span class="badge badge-info">{{ $user->roles->first()->name }}</span>
                                @else
                                    <span class="badge badge-secondary">Sin rol</span>
                                @endif
                            </td>
                            {{-- <td>
                                <span class="badge badge-warning">{{ $user->permissions->count() }} permisos</span>
                            </td> --}}
                            <td>
                                <button class="btn btn-sm btn-outline-primary"
                                        wire:click="openPermissionsModal({{ $user->id }})">
                                    Ver Permisos
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            <div class="mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    <!-- Modal de Permisos -->
    @include('livewire.super-admin.partials.permissions-modal')

    <!-- Modal de Confirmación -->
    @include('livewire.super-admin.partials.password-modal')
</div>

