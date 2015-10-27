/**
 * NoXMLSpace
 * 
 * @author Thiago Augustus de Oliveira
 * @version 1.0.0
 * @copyright MIT Copyright (c) 2015
 */
final class NoXMLSpace
{

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
	 * @param xml
	 * @return xml
	 * @access public
	 */
	public static function noSpace( $xml = null )
	{

		if ( empty( $xml ) || is_null( $xml ) ) return false;

		foreach ( $xml as $key => $value ) {
			if ( sizeof( $value ) > 1 ) {
				noSpace( $value ); // Get next node
			} else {
				$xml->$key = trim( $value );
			}
		}
		return $xml;
	}

}

// $xml = simplexml_load_file( $xml_file );
// Exemple: var_dump( '<pre>', NoXMLSpace::noSpace($xml) );