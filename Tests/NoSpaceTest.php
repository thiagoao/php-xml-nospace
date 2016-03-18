<?php

class NoSpaceTest extends PHPUnit_Framework_TestCase
{

    testNoXMLSpace() {
        $xml = simplexml_load_file( $xml_file );
        $xml = NoXMLSpace::noSpace($xml);
        
        $this->assertEquals('Hello World', $xml->message);
    }
  
}
