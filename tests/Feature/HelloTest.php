<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Person;
class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        // $this->assertTrue(true);

        // $arr = [];
        // $this->assertEmpty($arr);

        // $txt = "Hello World";
        // $this->assertEquals('Hello World', $txt);

        // $n = random_int(0, 100);
        // $this->assertLessThan(100, $n);

        // アクセスのテスト
        $this->get('/')->assertStatus(302);
        $this->get('/')->assertOk();
        $this->post('/add')->assertOk();
        $this->post('/delete')->assertOk();
        $this->post('/update')->assertOk();
        $this->get('/aa')->assertStatus(404);
        // データベースのテスト
        Person::factory()->create([
            'list'=>'筋トレ',
        ]);
        $this->assertDatabaseHas('people',[
            'list'=>'筋トレ',
           
        ]);
    }
}