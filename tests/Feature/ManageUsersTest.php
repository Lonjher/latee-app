<?php

use Livewire\Livewire;

it('renders the Folio user management page', function () {
    $this->get('/users')->assertOk()->assertSee('Kelola pengguna')->assertSee('Aditya Pratama');
});

it('filters and paginates demo users', function () {
    Livewire::test('admin.manage-users')
        ->assertSee('Aditya Pratama')->assertDontSee('Maya Lestari')
        ->call('nextPage')->assertSee('Maya Lestari')
        ->set('search', 'nadia')->assertSee('Nadia Putri')->assertDontSee('Maya Lestari')
        ->call('clearFilters')->set('statusFilter', 'Nonaktif')
        ->assertSee('Bima Saputra')->assertDontSeeHtml('<strong>Aditya Pratama</strong>');
});

it('creates edits and deletes demo users without changing accounts', function () {
    $component = Livewire::test('admin.manage-users')->call('create')
        ->set('name', 'Demo Tester')->set('email', 'tester@example.com')->call('save')
        ->assertHasNoErrors()->assertSee('Demo Tester');
    $id = collect(session('demo.users'))->firstWhere('email', 'tester@example.com')['id'];
    $component->call('edit', $id)->set('name', 'Updated Tester')->call('save')
        ->assertSee('Updated Tester')->call('delete', $id)->assertDontSee('Updated Tester');
    $this->assertDatabaseMissing('users', ['email' => 'tester@example.com']);
});

it('validates fields and rejects duplicate emails', function () {
    Livewire::test('admin.manage-users')->call('create')->call('save')
        ->assertHasErrors(['name', 'email'])
        ->set('name', 'Duplicate')->set('email', 'aditya.pratama@example.com')
        ->call('save')->assertHasErrors(['email'])
        ->set('email', 'valid@example.com')->set('role', 'Owner')
        ->call('save')->assertHasErrors(['role']);
});
