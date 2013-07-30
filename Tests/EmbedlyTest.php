<?php


namespace EE\Bundle\EmbedlyBundle\Tests;

use Embedly\Embedly;

class EmbedlyTest extends \PHPUnit_Framework_TestCase {

    public function testOembed()
    {
        $embedly = new Embedly();

        // this test is meant to fail because Embedly doesn't provide oembed for github organization page
        $obj = $embedly->oembed('https://github.com/EE');

        $this->assertEquals($obj->error_code, 401);
        $this->assertEquals($obj->error_message, 'This service requires an Embedly key');
        $this->assertEquals($obj->type, 'error');

    }

}
