<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class gifTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function auth_user_can_visit_gif_app_and_see_all_gifs()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user,'api')->get('/api/gif');
       // $response = $this->get('/api/gif');
        $response->assertStatus(200);
    }
    
    /**
     * @test
     */
    public function auth_user_can_visit_gif_app_and_see_single_gifs()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user,'api')->get('/api/gif?gif-key=test1');
       // $response = $this->get('/api/gif');
        $response->assertStatus(200);
    }
}
