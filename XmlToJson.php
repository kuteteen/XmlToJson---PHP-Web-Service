<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');

class XmlToJson {
	public function Parse ($url) {
	     $ch = curl_init();
             curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
             curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
             curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
             curl_setopt($ch, CURLOPT_URL, $url);
             curl_setopt($ch, CURLOPT_VERBOSE, 1);
             $data = curl_exec($ch);
            
             if( $data == false ) return json_encode(array(
                 'error' => curl_error($ch)
             ));
            
             $xmlObject = simplexml_load_string(
                 $data,
                 null,
                 LIBXML_NOCDATA
             );
             
             return json_encode($xmlObject);
	}
}

if(!filter_var($_GET['xmlUrl'], FILTER_VALIDATE_URL)) {
	//not valid
	print json_encode(array('error'=>'Url Invalid'));;
} else {
	// valid
	print XmlToJson::Parse($_GET['xmlUrl']);
}
