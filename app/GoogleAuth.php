<?php 

	/**
	* 
	*/
	class GoogleAuth{

		protected $client;
		
		public function __construct(Google_Client $googleClient = null){
			$this->client = $googleClient;
			if ($this->client) {
				$this->client->setClientId('974450724158-30hh3d17vjrjv9hqeedoaoj85q6eftq4.apps.googleusercontent.com');
				$this->client->setClientSecret('U_9iTf7bpC-QR7o0b0ZO4sah');
				$this->client->setRedirectUri('http://localhost/proyecto/web/index.php?ctl=comprobarUser');
				$this->client->setScopes('mitxu93@gmail.com');
			}
		}
	}


?>