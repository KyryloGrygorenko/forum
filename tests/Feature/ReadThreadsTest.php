<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;

    public function a_user_can_browse_threads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
