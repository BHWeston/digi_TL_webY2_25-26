<?php

$sOriginal = " Hello, World! ";

// Trim - Will remove the spaces on either end of a string
$trimmed = trim($sOriginal);
echo($trimmed);

// Upper
$upper = strtoupper($sOriginal);
echo($upper);

// Lower
$lower = strtolower($sOriginal);
echo($lower);

// Replace
$replacedText = str_replace("Hello", "Hate", $sOriginal);
echo($replacedText);

// Length
$length = strlen($sOriginal);
echo($length);

// STRING EXPLODE:
$rgb = "red, green, blue";
$colours = explode("," ,$rgb);
echo($colours[1]);

// STRING IMPLODE:
$joined = implode(" | ", $colours);
echo("The colours joined again: $joined");

?>