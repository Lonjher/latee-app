<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Livewire\Form;
use Spatie\Permission\Models\Role;

class RoleForm extends Form
{
    public ?Role $role = null;

    public string $name = '';
    public array $permissions = [];

    public function rules(): array
    {
        return [
            'name' => [
                'required', 'string', 'min:2', 'max:255',
                Rule::unique('roles', 'name')->ignore($this->role?->id),
            ],
            'permissions' => 'array',
            'permissions.*' => 'string|exists:permissions,name',
        ];
    }

    public function setRole(Role $role): void
    {
        $this->role = $role;
        $this->name = $role->name;
        $this->permissions = $role->permissions->pluck('name')->all();
        $this->resetValidation();
    }

    public function create(): Role
    {
        $this->name = Str::slug(trim($this->name), '_');
        $this->validate();

        $role = Role::create([
            'name' => $this->name,
            'guard_name' => 'web',
        ]);
        $role->syncPermissions($this->permissions);

        return $role;
    }

    public function update(): Role
    {
        $this->name = Str::slug(trim($this->name), '_');
        $this->validate();

        if ($this->role->name === 'admin' && $this->name !== 'admin') {
            throw ValidationException::withMessages([
                'form.name' => 'Role "admin" tidak dapat diubah namanya.',
            ]);
        }

        $this->role->update(['name' => $this->name]);
        $this->role->syncPermissions($this->permissions);

        return $this->role;
    }
}
