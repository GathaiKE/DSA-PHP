<?php
libxml_use_internal_errors(true);
$myXMLData="
<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>John Doe</nuser>
<email>johndoe@email.com</ermail>
</document>
";

$xml = simplexml_load_string($myXMLData);

if($xml === false){
    echo "Failed loading xml";

    foreach (libxml_get_errors() as $error) {
        echo "\n".$error->message;
    }
} else{
    print_r($xml);
}

?>