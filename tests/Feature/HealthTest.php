<?php

namespace Tests\Unit;

use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HealthTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_health_check()
    {
        $this->json('get', 'api/health')
            ->assertOk()
            ->assertJsonStructure([
                'message'
            ]);

    }
}
