<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_redirect_to_login_when_the_route_accessesed()
    {


        $response = $this->get('/');

        $response->assertStatus(302);

        $response->assertRedirect('/login');
    }

    public function test_the_application_returns_register_view_when_register_route_is_accessesed()
    {
        $response = $this->get('register');

        $response->assertStatus(200);
    }

    public function test_the_application_create_menu_when_valid_data()
    {
      $response = $this->post('/menu', [
        'name' => 'Cardápio Teste',
      ]);

      $response->assertRedirect()
      ->assertSessionHasNoErrors()
      ->assertValid(['name']);

      $this->assertDatabaseHas('menus', [
        'name' => 'Cardápio Teste',
      ]);
    }
}
