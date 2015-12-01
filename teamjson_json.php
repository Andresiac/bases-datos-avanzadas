<?php

//funcion para descomprimir archivo y sustituir char que sean necesarios
function xmlToArray($xml, $options = array()) {
    $defaults = array(
        'namespaceSeparator' => ':',
        'attributePrefix' => '@',   
        'alwaysArray' => array(),   
        'autoArray' => true,        
        'textContent' => '$',       
        'autoText' => true,         
        'keySearch' => false,       
        'keyReplace' => false       
    );



//get child nodes from all namespaces
    $tagsArray = array();
    foreach ($namespaces as $prefix => $namespace) {
        foreach ($xml->children($namespace) as $childXml) {
            //recurse into child nodes
            $childArray = xmlToArray($childXml, $options);
            list($childTagName, $childProperties) = each($childArray);


?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSON</title>
</head>
<body background="http://cdn.wonderfulengineering.com/wp-content/uploads/2013/11/apple-wallpaper-background-2.jpg">

	<h1>XML a JSON</h1>
	<h2> Ya esta convertido desde un archivo XML</h2>
	
	
</body>
</html>