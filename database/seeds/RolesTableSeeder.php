<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        $role = Role::find(1);
        $role->givePermissionTo(['admin.users.index','admin.users.show','admin.users.create','admin.users.edit','admin.users.destroy']);
        $user = User::find(30);
        $user->assignRole('admin');

    }
}
