<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->get('/sample2')->response;
        $body = json_decode($response->getContent(),true);

        $this->assertEquals("OK",$body["status"]??null);
        $this->assertEquals("hello",$body["message"]??null);
    }
}
