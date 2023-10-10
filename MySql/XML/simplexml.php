<?php
$myXMLData=
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>John</to>
<from>Jane</from>
<heading>Reminder</heading>
<body>Don't forget we have plans this weekend.</body>
</note>";


$xml = simplexml_load_string($myXMLData) or die("Error : Cannot create object");

print_r($xml);

?>