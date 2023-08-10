<?php

//========================================//
/*
   HERE is the code for basic DES encryption 
   using the PHP library.  The key is given below.
   DO NOT USE this for any publically accessible data.
   This is only used to encrypt passwords before
   they are put into the database for extra 
   protection.
   
//=========================================/*/
//$key_value = "asdk234ksdfsd8423rksdfv83425j";


//========================================//
/*
   HERE is the code for basic Triple DES Encryption
   using the PHP library.  The key is given below.
   DO NOT USE this for any publically accessible data.
   This is only used to encrypt data before it's
   put into the database for extra protection.
   
//=========================================/*/

class Cipher
{
    //member variables
    private $key_value = "askljh23489asdflh23498sdfklnsdfqwo45";

    private $td;
    private $iv; //initialization vector
    private $key;
    private $key_size;

    //constructor
    function __construct ()
    {
        /* Open the cipher */
        //$this->td = mcrypt_module_open(MCRYPT_3DES, '', 'ofb', '');
        $this->td = mcrypt_module_open('rijndael-256', '', 'ofb', '');
        //$this->iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($this->td), MCRYPT_RAND);
        $this->iv = "";
        $this->external_iv = false;
        $this->key_size = mcrypt_enc_get_key_size($this->td);
        $this->key = substr(md5($this->key_value), 0, $this->key_size);
    }

    //destructor
    function __destruct()
    {
        mcrypt_module_close($this->td);
    }

    //make encryption use external IV
    // This way you could store it in the database for extra protection.
    public function set_iv($iv)
    {
        $this->iv = $iv;
        $this->external_iv = true;
    }
    function create_iv ()
    {
        $iv = '';
        srand((double) microtime() * 1000000);
        for($i = 0; $i < $this->key_size; $i++)
            $iv .= chr(rand(0,255));
        return $iv;
    }

  //generates new iv if external isn't given
  private function check_iv()
  {
      if($this->iv=="")
          $this->iv = $this->create_iv($this->key_size);
  }

    /* Encrypt data */
    public function encrypt($string)
    {
        $this->check_iv();
        mcrypt_generic_init($this->td, $this->key, $this->iv);
        $encrypted = mcrypt_generic($this->td, $string);
        mcrypt_generic_deinit($this->td);

        $ret = "";
        if(!$this->external_iv) //attach IV to encrypted text
          $ret = $this->iv.$encrypted;
        else
          $ret = $encrypted;
        return $ret;
    }

    /* Decrypt encrypted string */
    public function decrypt($string)
    {
        if(!$this->external_iv)
        {
            $this->iv = substr($string, 0, $this->key_size);
            $string = substr($string, $this->key_size);
        }

        //$string = base64_decode($string);
        mcrypt_generic_init($this->td, $this->key, $this->iv);
        $decrypted = mdecrypt_generic($this->td, $string);
        mcrypt_generic_deinit($this->td);
        return $decrypted;
    }
}



//======================================================================
//  DO NOT USE THIS.
//   - This is a legacy system only used to decrypt old databases
//======================================================================
class OLD_Cipher
{
	//member variables
	private $key_value = "askljh23489asdflh23498sdfklnsdfqwo45";
	
	private $td;
	private $ks;
	private $iv;
	private $key;
	
	//constructor
	function __construct ()
	{
		/* Open the cipher */
		$this->td = mcrypt_module_open(MCRYPT_3DES, '', 'ofb', '');
		//$this->td = mcrypt_module_open('rijndael-256', '', 'ofb', '');
		srand(5);
		$this->iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($this->td), MCRYPT_RAND);
		$this->ks = mcrypt_enc_get_key_size($this->td);
		$this->key = substr(md5($this->key_value), 0, $this->ks);
	}	
	
	//destructor
	function __destruct() 
	{  
	 	mcrypt_module_close($this->td);
	}
	
	/* Encrypt data */
	public function encrypt($string)
	{
		mcrypt_generic_init($this->td, $this->key, $this->iv);
		$encrypted = mcrypt_generic($this->td, $string);
		mcrypt_generic_deinit($this->td);
		return $encrypted;
	}
	
	/* Decrypt encrypted string */
	public function decrypt($string)
	{
		mcrypt_generic_init($this->td, $this->key, $this->iv);
		$decrypted = mdecrypt_generic($this->td, $string);
		mcrypt_generic_deinit($this->td);
		return $decrypted;
	}
}

?>