<?php

$pieces = array("Hello", "World,", "I", "am", "Here!");

$gluedTogetherSpaces = implode(" ", $pieces);
$gluedTogetherDashes = implode("-", $pieces);
for($i = 0; $i < count($pieces); $i++){
	echo "Piece #$i = $pieces[$i] <br />";
}
echo "Glued with Spaces = $gluedTogetherSpaces <br />";
echo "Glued with Dashes = $gluedTogetherDashes";

/* DISPLAY:

Piece #0 = Hello
Piece #1 = World,
Piece #2 = I
Piece #3 = am
Piece #4 = Here!
Glued with Spaces = Hello World, I am Here!
Glued with Dashes = Hello-World,-I-am-Here!

*/