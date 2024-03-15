<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

use Tests\TestCase;

class BooksControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_base_endpoint_returns_a_successful_response()
    {
        $this
            ->get('/books')
            ->seeJson([
                'title' => 'Wayahe Ngopi'
            ])
            ->seeJson([
                'title'=> '21 Lessons'
            ]);

    /*$this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );*/
    }
}
