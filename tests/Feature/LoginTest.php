<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class LoginTest extends TestCase


{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_test_application_returns_login_view_when_login_route_is_accessesed()
    {
        $response = $this->get('login');

        $response->assertStatus(200);
        $response->assertSeeText('Login');

    }
    public function test_shouldnt_login_when_invalid_data()
    {
      $response = $this->post('login');

      $response->assertInvalid(['email','password']);
    }
  }
