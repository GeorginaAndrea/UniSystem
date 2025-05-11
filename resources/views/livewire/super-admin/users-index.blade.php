<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search"  wire:keydown="debug" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        {{-- <th>Editar</th> --}}
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('super-admin.users.edit', $user->id)}}">Editar</a>
                        </td> --}}
                        
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
    </div>
</div>
