<?php


class PagesTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderReturnHelloWorld()
    {
        $pages = new \Controllers\Core\Web\Pages();
        $expected = "Hello World";
        $this->assertEquals($expected, $pages->render());
    }

    public function testReturnTrue()
    {
        $page = new \Controllers\Core\Web\Pages();
        $this->assertTrue($page->returnTrue());
    }

    public function testReturnArrayReturnValidArray()
    {
        $pages = new \Controllers\Core\Web\Pages();
        $this->assertTrue(is_array($pages->returnArray()));
    }
}