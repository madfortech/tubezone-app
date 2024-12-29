<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Livewire\Posts\CreatePost;
use Livewire\Livewire;

class CreatePostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRendersSuccessfully(): void
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
        //$response = $this->get('/');

       // $response->assertStatus(200);
    }
}
