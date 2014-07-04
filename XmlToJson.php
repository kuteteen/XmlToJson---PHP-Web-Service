<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');

class XmlToJson {
	public function Parse ($url) {
		$fileContents= file_get_contents($url);
		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
		$fileContents = trim(str_replace('"', "'", $fileContents));
		$simpleXml = simplexml_load_string($fileContents);
		$json = json_encode($simpleXml);
		return $json;
	}
}

if(!filter_var($_GET['xmlUrl'], FILTER_VALIDATE_URL)) {
	//not valid
	print json_encode(array('error'=>'Url Invalid'));;
} else {
	// valid
	print XmlToJson::Parse($_GET['xmlUrl']);
}
