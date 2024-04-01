<?php

namespace Tests;

use Laravel\Lumen\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__ . '/../bootstrap/app.php';
    }

    public function seeHasHeader($header)
    {
        $this->assertTrue(
            $this->response->hasHeader($header),
            "Response should have the header ' { $header } ' but does not."
        );

        return $this;
    }

    public function seeHeaderWithRegExp($header, $regexp)
    {
        $this
            ->seeHasHeader($header)
            ->assertMatchesRegularExpression(
                $regexp,
                $this->response->headers->get($header)
            );

        return $this;
    }
}
