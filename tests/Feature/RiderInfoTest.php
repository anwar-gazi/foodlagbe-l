<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RiderInfoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/rider/store_location', [
            'lat' => '23.3151497',
            'lon' => '90.3613921',
            'rider_username' => 'anwar'
        ]);

        $response->assertStatus(200);
    }
}
