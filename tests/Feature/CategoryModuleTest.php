<?php

namespace Tests\Feature;
use App\User;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryModuleTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_see_category_form()
    {
        $user = User::find(30);
        $response = $this->actingAs($user)->from('admin/categorias')
        ->get('admin/categorias/create');
        $response->assertSee('Crear');
        $response->assertSee('Nombre');

    }
    public function test_user_can_create_a_new_category()
    {
        $user = User::find(30);
        $category = factory(Category::class)->make();
        $response = $this->actingAs($user)->from('admin/categorias/create')
        ->post('admin/categorias',['name'=> $category->name , 'url' => $category->url]);
        $response->assertRedirect('admin/categorias');
        $response->assertSessionHas('info', $value = 'Categoría <b>'. $category->name .'</b> creada con éxito');
    }
    public function test_user_loged_can_see_a_category()
    {
        // $this->withoutExceptionHandling();
        $user = User::find(30);
        // $category = factory(Category::class)->make();
        $category = Category::find(38);
        $response = $this->actingAs($user)->get('admin/categorias/' . $category->id);
        $response->assertViewIs('admin.categories.show');
        $response->assertSee('Nombre');
        $response->assertSee('URL');
        $response->assertSee($category->name);
        $response->assertSee($category->url);
   




        // $response->assertRedirect('admin/categorias');
        // $response->assertSessionHas('info', $value = 'Categoría <b>'. $category->name .'</b> creada con éxito');
    }
}
