<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SlowControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_it_returns_promos_page_data(): void
    {
        $response = $this
            ->get('/slowcontroller/promos', ['Accept' => 'application/json']);

        $response->assertStatus(200);

        $viewData = $response->json();

        $this->assertCount(5,$viewData['properties']);
        $this->assertContains([
            'property_id' => 1,
            'promotions' => [
                ['name' => 'promotion for property 1']
            ]
        ], $viewData['properties']);
        $this->assertContains([
            'property_id' => 2,
            'promotions' => []
        ], $viewData['properties']);
        $this->assertContains([
            'property_id' => 3,
            'promotions' => []
        ], $viewData['properties']);
        $this->assertContains([
            'property_id' => 4,
            'promotions' => [
                ['name' => 'promotion for property 4'],
                ['name' => 'another promotion for property 4']
            ]
        ], $viewData['properties']);
        $this->assertContains([
            'property_id' => 5,
            'promotions' => []
        ], $viewData['properties']);
    }
}
