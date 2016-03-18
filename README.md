# php-xml-nospace

![Innovation Award](http://www.phpclasses.org/award/innovation/nominee.gif) [Innovation Award](http://www.phpclasses.org/package/9464-PHP-Trim-spaces-from-XML-tag-values.html)

Remove both side spaces between words in a .xml file

#### Example

```php
$xml = simplexml_load_file( $xml_file );
var_dump( '<pre>', NoXMLSpace::noSpace($xml) );
```
