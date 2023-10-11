<?php

$xml_doc = new DOMDocument();
$xml_doc->load("note.xml");

$x = $xml_doc->documentElement;
foreach($x->childNodes as $i){
    echo $i->nodeName." : ".$i->nodeValue."\n";
}

?>