<?php

 $doc = new DOMDocument;
 $doc->validateOnParse = true;

$file = $_POST['file'];
$params = $_POST['values'];
$obj=$_POST['keys'];
$json = json_decode(file_get_contents($file),true);
$json[$obj] = array($params);
file_put_contents($file, json_encode($json));
$json = json_decode(file_get_contents($file),true);



?>