<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

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

    /**
     * A test to make sure logged in users can submit form.
     *
     * @return void
     */
    public function testLoggedInUserCanSubmitForm()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post('/submitform', [
            'name'               => 'Test Name',
            'sectors'            => [1, 2, 3],
            'agreement_to_terms' => 1
        ]);
        $count = DB::table('user_sectors')->pluck('id');
        $this->assertCount(3, $count);
    }

    /**
     * A test to make sure logged out cannot reach /logout.
     *
     * @return void
     */
    public function testLoggedOutUserCannotSeeLogout()
    {
        $response = $this->post('/logout');
        $response->assertStatus(302);
    }

    /**
     * A test to make sure logged in users can /logout.
     *
     * @return void
     */
    public function testLoggedOutUserCanLogout()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post('/logout');
        $response->assertStatus(302);
    }

    /**
     * A test to make sure users can update their names.
     *
     * @return void
     */
    public function testLoggedInUserCanUpdateName()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post('/submitform', [
            'name'               => 'Test Name',
            'sectors'            => [1, 2, 3],
            'agreement_to_terms' => 1
        ]);

        $name = DB::table('users')->pluck('name');
        $this->assertTrue($name == '["Test Name"]');

        $response = $this->actingAs($user)->post('/submitform', [
            'name'               => 'Not Test Name',
            'sectors'            => [2, 3, 4],
            'agreement_to_terms' => 1
        ]);
        $changedName = DB::table('users')->pluck('name');
        $this->assertTrue($changedName == '["Not Test Name"]');


        $this->assertTrue($name != $changedName);
    }

    /**
     * A test to make sure users can update their sectors.
     *
     * @return void
     */
    public function testLoggedInUserCanUpdateSectors()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post('/submitform', [
            'name'               => 'Test Name',
            'sectors'            => [1, 2, 3],
            'agreement_to_terms' => 1
        ]);

        $sectors = DB::table('user_sectors')->where('username', $user->username)->pluck('sector_id');
        $this->assertTrue($sectors == '["1","2","3"]');

        $response = $this->actingAs($user)->post('/submitform', [
            'name'               => 'Test Name',
            'sectors'            => [4, 5, 6],
            'agreement_to_terms' => 1
        ]);
        $changedSectors = DB::table('user_sectors')->where('username', $user->username)->pluck('sector_id');
        $this->assertTrue($changedSectors == '["4","5","6"]');

        $this->assertTrue($sectors != $changedSectors);

    }
    
}
