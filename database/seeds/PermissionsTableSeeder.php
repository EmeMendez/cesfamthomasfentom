<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //posts
        Permission::create(['name' => 'admin.posts.index']);
        Permission::create(['name' => 'admin.posts.show']);
        Permission::create(['name' => 'admin.posts.create']);
        Permission::create(['name' => 'admin.posts.edit']);
        Permission::create(['name' => 'admin.posts.destroy']);

        //tags
        Permission::create(['name' => 'admin.tags.index']);
        Permission::create(['name' => 'admin.tags.show']);
        Permission::create(['name' => 'admin.tags.create']);
        Permission::create(['name' => 'admin.tags.edit']);
        Permission::create(['name' => 'admin.tags.destroy']);
        
        //categories
        Permission::create(['name' => 'admin.categories.index']);
        Permission::create(['name' => 'admin.categories.show']);
        Permission::create(['name' => 'admin.categories.create']);
        Permission::create(['name' => 'admin.categories.edit']);
        Permission::create(['name' => 'admin.categories.destroy']);

        //users
        Permission::create(['name' => 'admin.users.index']);
        Permission::create(['name' => 'admin.users.show']);
        Permission::create(['name' => 'admin.users.create']);
        Permission::create(['name' => 'admin.users.edit']);
        Permission::create(['name' => 'admin.users.destroy']);
    }
}
