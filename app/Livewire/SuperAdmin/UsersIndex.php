<?php

namespace App\Livewire\SuperAdmin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class UsersIndex extends Component
{
    use WithPagination;

    public $search;
    public $showPermissionsModal = false;
    public $currentUserPermissions = [];
    public $currentUserName;
    public $currentUserId;

    public $showPasswordModal = false;
    public $adminPassword;
    public $pendingAction;
    public $pendingPermissionName;

    public $userIdToModify;
    public $permissionToRemove;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::where('name', 'LIKE', "%{$this->search}%")
            ->orWhere('email', 'LIKE', "%{$this->search}%")
            ->with('roles', 'permissions')
            ->paginate(10);

        return view('livewire.super-admin.users-index', compact('users'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function openPermissionsModal($userId)
    {
        $user = User::with('permissions')->findOrFail($userId);
        $this->currentUserPermissions = $user->getAllPermissions()->pluck('name')->toArray();
        $this->currentUserName = $user->name;
        $this->currentUserId = $user->id;
        $this->showPermissionsModal = true;
    }

    public function preparePermissionRemoval($permissionName)
    {
        $this->pendingPermissionName = $permissionName;
        $this->showPermissionsModal = false;
        $this->showPasswordModal = true;
        $this->pendingAction = 'remove_permission';
    }

    public function authorizeAndExecute()
    {
        $admin = Auth::user();

        if (!Hash::check($this->adminPassword, $admin->password)) {
            session()->flash('error', 'Contraseña incorrecta');
            return;
        }

        if ($this->pendingAction === 'remove_permission') {
            $this->removePermissionFromUser($this->pendingPermissionName);
        }

        $this->reset(['adminPassword', 'showPasswordModal', 'pendingAction', 'pendingPermissionName']);
    }

    public function removePermissionFromUser($permissionName)
    {
        $user = User::findOrFail($this->currentUserId);
        $user->revokePermissionTo($permissionName);
        $this->currentUserPermissions = $user->getAllPermissions()->pluck('name')->toArray();
        session()->flash('message', 'Permiso eliminado');
        $this->showPermissionsModal = true;
    }
}

