<?php

class NoSpaceTest extends PHPUnit_Framework_TestCase
{

    public function testNoXMLSpace() {
        $xml = simplexml_load_file( 'xml_file.xml' );
        $xml = NoXMLSpace::noSpace($xml);
        
        $this->assertEquals('Hello World', $xml->message);
    }
  
}
