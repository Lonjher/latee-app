<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user = null;

    public string $full_name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role = 'user';
    public bool $is_active = true;

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'email'     => [
                'required', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore($this->user?->id),
            ],
            'role'      => ['required', 'exists:roles,name'],
            'is_active' => 'boolean',
            'password'  => $this->user === null
                ? 'required|string|min:8|confirmed'
                : 'nullable|string|min:8|confirmed',
        ];
    }

    public function setUser(User $user): void
    {
        $this->user                  = $user;
        $this->full_name             = $user->full_name;
        $this->email                 = $user->email;
        $this->password              = '';
        $this->password_confirmation = '';
        $this->role                  = $user->roles->first()?->name ?? 'user';
        $this->is_active             = (bool) $user->is_active;
        $this->resetValidation();
    }

    public function create(): User
    {
        $this->full_name = trim($this->full_name);
        $this->email     = strtolower(trim($this->email));
        $this->validate();

        $user = User::create([
            'full_name'         => $this->full_name,
            'email'             => $this->email,
            'password'          => Hash::make($this->password),
            'is_active'         => $this->is_active,
            'email_verified_at' => now(),
        ]);

        $user->assignRole($this->role);

        return $user;
    }

    public function update(): User
    {
        $this->full_name = trim($this->full_name);
        $this->email     = strtolower(trim($this->email));
        $this->validate();

        $data = [
            'full_name' => $this->full_name,
            'email'     => $this->email,
            'is_active' => $this->is_active,
        ];

        if (! empty($this->password)) {
            $data['password'] = Hash::make($this->password);
        }

        $this->user->update($data);
        $this->user->syncRoles([$this->role]);

        return $this->user;
    }
}
