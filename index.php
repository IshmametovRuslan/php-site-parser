<?php
/**
 * Created by PhpStorm.
 * User: Ruslan
 * Date: 01.04.2018
 * Time: 18:25
 */

function Parse( $p1, $p2, $p3 ) {
	$num1 = strpos( $p1, $p2 );
	if ( $num1 === false ) {
		return 0;
	} else {
		$num2 = substr( $p1, $num1 );

		return strip_tags( substr( $num2, 0, strpos( $num2, $p3 ) ) );
	}

}

$siteContent = file_get_contents( "https://www.shokoladki.ru/" );

echo Parse( $siteContent, '<div class="tel">', '<i>Пн.–Пт. 9:00 – 18:00</i>' );

