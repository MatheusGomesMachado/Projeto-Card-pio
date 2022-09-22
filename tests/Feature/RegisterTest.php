<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class RegisterTest extends TestCase

{
  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successesed()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertSeeText('Register');
    }

    public function test_shouldnt_regster_user_when_invalid_data()
    {
      $response = $this->post('/register',[
        'name' => 'Matheus',
        'email' => 'matheusMGomach@hotmail.com',
        'password' => '$2y$10$ji7Gs2lNXhPtQB.SOyD1e./hRr2rn5XYOzfz6aRrv58nRbAjfe89S',
        'password_confirmation' => '$2y$10$ji7Gs2lNXhPtQB.SOyD1e./hRr2rn5XYOzfz6aRrv58nRbAjfe89S',

      ]);
      $response->assertRedirect()->assertSessionHasNoErrors();

      $this->assertDatabaseHas('users',[
        'email' => 'matheusMGomach@hotmail.com',
      ]);
    }
}
