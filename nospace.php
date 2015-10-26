<?php

/**
 * noSpace 
 * Remove all spaces in both side of the words in a .xml file
 * 
 * Here is an inline example:
 * <code>
 *   <?php
 *     $file = simplexml_load_file($_FILES['xml']['tmp_name']);
 *     $xml  = noSpace($xml);
 *   ?>
 * </code>
 * 
 * @author Thiago Augustus de Oliveira
 * @version 1.0.0
 * @copyright MIT Copyright (c) 2015
 * @param xml
 * @return xml
 */
function noSpace( $xml ) {
	foreach ( $xml as $node => $value ) {
		if ( sizeof( $value ) > 1 ) {
			noSpace( $value ); // Get next node
		} else {
			$xml->$node = trim( $value );
		}
	}
	return $xml;
}