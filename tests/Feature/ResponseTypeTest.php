<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponseTypeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
        $response->assertDontSeeText('dfghfghfgh');
        $response->assertDontSeeText('text');
        $response->assertDontSeeText('Текст');
        $response->assertStatus(200);
    }
}
