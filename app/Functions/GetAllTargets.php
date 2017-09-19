<?php
namespace App\Classes;

require_once 'HTTP/Request2.php';
require_once 'SignatureBuilder.php';

// See the Vuforia Web Services Developer API Specification - https://developer.vuforia.com/resources/dev-guide/retrieving-target-cloud-database
// The GetAllTargets sample demonstrates how to query a single target by target id.
class GetAllTargets{
	
	//Server Keys
	private $access_key 	= "733226c9db41d9c8a14f3517bdb739e789fad196";
	private $secret_key 	= "e16ce7c321bd7236027278064d8a1ee92b59087e";
	
	private $url 		= "https://vws.vuforia.com";
	private $requestPath = "/targets";// . $targetId;
	private $request;
	
	public function GetAllTargets(){

		$this->requestPath = $this->requestPath;
		
		$this->execGetAllTargets();
	}
	
	public function execGetAllTargets(){
		
		$this->request = new HTTP_Request2();
		$this->request->setMethod( HTTP_Request2::METHOD_GET );
		
		$this->request->setConfig(array(
				'ssl_verify_peer' => false
		));
		
		$this->request->setURL( $this->url . $this->requestPath );
		
		// Define the Date and Authentication headers
		$this->setHeaders();
		
		
		try {
			echo $this->request->getBody();
			$response = $this->request->send();
		
			if (200 == $response->getStatus()) {
				echo $response->getBody();
			} else {
				echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
						$response->getReasonPhrase(). ' ' . $response->getBody();
			}
		} catch (HTTP_Request2_Exception $e) {
			echo 'Error: ' . $e->getMessage();
		}
		
		
	}
	
	private function setHeaders(){
		$sb = 	new SignatureBuilder();
		$date = new DateTime("now", new DateTimeZone("GMT"));

		// Define the Date field using the proper GMT format
		$this->request->setHeader('Date', $date->format("D, d M Y H:i:s") . " GMT" );
		// Generate the Auth field value by concatenating the public server access key w/ the private query signature for this request
		$this->request->setHeader("Authorization" , "VWS " . $this->access_key . ":" . $sb->tmsSignature( $this->request , $this->secret_key ));

	}
}

?>