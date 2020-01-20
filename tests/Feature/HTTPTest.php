<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HTTPTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {   
           $response = $this->get('/getdata');
             $response->assertJson(['website'=>'AppDividend']);
        //$response = $this->get('/');

        //$response->assertStatus(200);
    }
}
