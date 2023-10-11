<?php

$xml =simplexml_load_file("note.xml") or die("Error : Cannot create object");

// print_r($xml);
echo $xml->to . "\n";
echo $xml->from . "\n";
echo $xml->heading . "\n";
echo $xml->content . "\n";
?>