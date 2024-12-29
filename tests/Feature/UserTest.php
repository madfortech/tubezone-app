<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_store(): void
    {
        $user = User::create([
            'username' => 'testing users',
            'email' => 'testinguser@example.com',
            'name' => 'users',
            'password' => bcrypt('password'),
        ]);


        $this->assertDatabaseHas('users', [
            'username' => 'testing users',
            'email' => 'testinguser@example.com',
            'name'=> 'users',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
