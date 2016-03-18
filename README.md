# php-xml-nospace

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/thiagoao/php-xml-nospace/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/thiagoao/php-xml-nospace/?branch=master) 
[![Build Status](https://scrutinizer-ci.com/g/thiagoao/php-xml-nospace/badges/build.png?b=master)](https://scrutinizer-ci.com/g/thiagoao/php-xml-nospace/build-status/master)
[![Code Climate](https://codeclimate.com/github/thiagoao/php-xml-nospace/badges/gpa.svg)](https://codeclimate.com/github/thiagoao/php-xml-nospace)

![Innovation Award](http://www.phpclasses.org/award/innovation/nominee.gif) [Innovation Award](http://www.phpclasses.org/package/9464-PHP-Trim-spaces-from-XML-tag-values.html)

Remove both side spaces between words in a .xml file

#### Example

```php
$xml = simplexml_load_file( $xml_file );
var_dump( '<pre>', NoXMLSpace::noSpace($xml) );
```
