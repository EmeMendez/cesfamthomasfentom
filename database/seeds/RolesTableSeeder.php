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
        Role::create(['name' => 'admin','description' => 'acceso total, excepto roles y permisos']);
        Role::create(['name' => 'writer','description' => 'acceso a posts, categoías y etiquetas']);

        $role = Role::find(1);
        $role->givePermissionTo([
            'admin.users.index',
            'admin.users.show',
            'admin.users.create',
            'admin.users.edit',
            'admin.users.destroy',

            'admin.tags.index',
            'admin.tags.show',
            'admin.tags.create',
            'admin.tags.edit',
            'admin.tags.destroy',            

            'admin.categories.index',
            'admin.categories.show',
            'admin.categories.create',
            'admin.categories.edit',
            'admin.categories.destroy',

            'admin.posts.index',
            'admin.posts.show',
            'admin.posts.create',
            'admin.posts.edit',
            'admin.posts.destroy'
            ]);


            $role = Role::find(2);
            $role->givePermissionTo([   
                'admin.tags.index',
                'admin.tags.show',
                'admin.tags.create',
                'admin.tags.edit',

    
                'admin.categories.index',
                'admin.categories.show',
                'admin.categories.create',
                'admin.categories.edit',

    
                'admin.posts.index',
                'admin.posts.show',
                'admin.posts.create',
                'admin.posts.edit',
                'admin.posts.destroy'
                ]);


        $user = User::find(30);
        $user->assignRole('admin');
        $user = User::find(31);
        $user->assignRole('writer');
    }
}
