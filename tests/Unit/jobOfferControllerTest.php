<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobOfferControllerTest extends TestCase
{
    /**
     * Test job creation form view
     *
     * @return void
     */
    public function testJobCreatePage()
    {
        $response = $this->get('/jobCreate');

        $response->assertStatus(200);
    }

    public function testJobStore()
    {
        $response = $this->call('post',
            '/jobCreate',
            array('_token' => csrf_token(),
                'jobTitle' => 'comptable',
                'publishDate' => '2019-02-18',
                'endDate' => '2019-03-18',
                'department' => 1)
        );

        $response->assertStatus('200');
    }
}