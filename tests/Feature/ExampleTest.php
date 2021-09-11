<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
       $this->get('/')->assertStatus(302);
       $this->get('/')->assertOk();
       $this->post('/add')->assertOk();
       $this->post('/delete')->assertOk();
       $this->post('/update')->assertOk();
       $this->get('/aa')->assertStatus(404);
    }
}