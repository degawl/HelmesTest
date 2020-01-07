<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A test to make sure logged out users cannot access form.
     *
     * @return void
     */
    public function testLoggedOutUserCannotSeeForm()
    {
        $response = $this->get('/form');
        $response->assertRedirect('/login');
    }

    /**
     * A test to make sure logged in users can access form.
     *
     * @return void
     */
    public function testLoggedInUserCanSeeForm()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/form');
        $response->assertStatus(200);
    }

    /**
     * A test to make sure logged out users cannot submit form.
     *
     * @return void
     */
    public function testLoggedOutUserCannotSubmitForm()
    {
        $response = $this->post('/submitform');
        $response->assertRedirect('/login');
    }

    
}
