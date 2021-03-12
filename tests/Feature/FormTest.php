<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test  */
    public function test_order_create()
    {
        $response = $this->post('/orders/save', [
            'name' => 'Alex',
            'last_name' => 'Fedorov',
            'email' => 'testadmin@mail.ru',
        ]);

        $response->assertStatus(200);

    }


}
