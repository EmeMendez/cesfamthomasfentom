<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Hash;

use Illuminate\Auth\Notificaciones\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class UserTest extends TestCase
{
    // Use RefreshDatabase;


    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/admin/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }



    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_login_with_correct_credentials()
    {
        $user = User::find(30);
        $credentials = ['email' => $user->email,'password'=> '123'];
        $response = $this->get('/admin/login');
        $response->assertSee('Entrar');
        $response = $this->post('/admin/login',$credentials);

        $response->assertRedirect('/admin/home');

        $this->assertAuthenticatedAs($user);


        // $response->assertSeeText('Sitio Administrativo Cesfam Dr. Thomas Fenton
        // ', $escaped = true);

        
    }


    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = User::find(30);
        $response = $this->actingAs($user)->get('admin/login');
        $response->assertRedirect('admin/home');
    }


    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = User::find(30);
       
        $response = $this->from('admin/login')->post('admin/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);
       
        $response->assertRedirect('/admin/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    public function test_user_cannot_login_with_incorrect_email()
    {
        $user = User::find(30);
       
        $response = $this->from('admin/login')->post('admin/login', [
            'email' => $user->email . '.com',
            'password' => '123',
        ]);
       
        $response->assertRedirect('/admin/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }




}
