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
        Permission::create(['name' => 'admin.posts.index','description' => 'Navegar por los posts']);
        Permission::create(['name' => 'admin.posts.show','description' => 'Ver el detalle de un post']);
        Permission::create(['name' => 'admin.posts.create','description' => 'Crear nuevos posts']);
        Permission::create(['name' => 'admin.posts.edit','description' => 'Editar un post']);
        Permission::create(['name' => 'admin.posts.destroy','description' => 'Eliminar y restaurar posts']);

        //tags
        Permission::create(['name' => 'admin.tags.index','description' => 'Navegar por las etiquetas']);
        Permission::create(['name' => 'admin.tags.show','description' => 'Ver el detalle de una etiqueta']);
        Permission::create(['name' => 'admin.tags.create','description' => 'Crear nuevas etiquetas']);
        Permission::create(['name' => 'admin.tags.edit','description' => 'Editar una etiqueta']);
        Permission::create(['name' => 'admin.tags.destroy','description' => 'Eliminar y restaurar etiquetas']);
        
        //categories
        Permission::create(['name' => 'admin.categories.index','description' => 'Navegar por las categorías']);
        Permission::create(['name' => 'admin.categories.show','description' => 'Ver el detalle de una categoría']);
        Permission::create(['name' => 'admin.categories.create','description' => 'Crear nuevas categorías']);
        Permission::create(['name' => 'admin.categories.edit','description' => 'Editar una categoría']);
        Permission::create(['name' => 'admin.categories.destroy','description' => 'Eliminar y restaurar categorías']);

        //users
        Permission::create(['name' => 'admin.users.index','description' => 'Navegar por los usuarios']);
        Permission::create(['name' => 'admin.users.show','description' => 'Ver el detalle de un usuario']);
        Permission::create(['name' => 'admin.users.create','description' => 'Crear nuevos usuarios']);
        Permission::create(['name' => 'admin.users.edit','description' => 'Editar un usuario']);
        Permission::create(['name' => 'admin.users.destroy','description' => 'Eliminar y restaurar usuarios']);
    
        //banners
        Permission::create(['name' => 'admin.banners.index','description' => 'Navegar por los banners']);
        Permission::create(['name' => 'admin.banners.show','description' => 'Ver el detalle de un banner']);
        Permission::create(['name' => 'admin.banners.edit','description' => 'Editar banners']);
    }
}
