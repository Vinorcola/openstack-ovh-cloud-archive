<?php

namespace OpenCloud\Test\Common\Error;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use OpenCloud\Common\Error\BadResponseError;
use OpenCloud\Test\TestCase;

class BadResponseErrorTest extends TestCase
{
    private $e;

    public function setUp()
    {
        $this->e = new BadResponseError();
    }

    public function test_it_gets_request()
    {
        $r = new Request('GET', '');

        $this->e->setRequest($r);
        $this->assertEquals($this->e->getRequest(), $r);
    }

    public function test_it_gets_response()
    {
        $r = new Response(500);

        $this->e->setResponse($r);
        $this->assertEquals($this->e->getResponse(), $r);
    }
}
