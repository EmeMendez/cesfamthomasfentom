<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,29)->create();
        User::create([
            'name' => 'Emelinda Méndez',
            'email' => 'ememendeztabilo@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
