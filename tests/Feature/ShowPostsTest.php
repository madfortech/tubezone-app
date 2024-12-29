<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Livewire\Posts\DisplayPost;
use Livewire\Livewire;
use App\Models\Post;

use Tests\TestCase;

class ShowPostsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testDisplaysAllPosts(): void
    {
        
        Post::factory()->create(['title' => 'On bathing well']);

        Livewire::test(DisplayPost::class)
            ->assertViewHas('posts', function ($posts) {
                return count($posts) == 1;
            });
            $this->assertViewHas('posts', 3);

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
