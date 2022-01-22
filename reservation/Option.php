<?php 
declare(strict_types=1);



/**
 * 
 */
class Option 
{
    private $id;
	private $hotele;
	private $transport;
	private $prix;
	


	public function getHotele() 
	{
		return $this->hotele;
	}

	public function setHotele($hotele){
		$this->hotele = $hotele;
	}

	
	public function getTransport()
	{
		return $this->transport;
	}

	public function setTransport($transport){
		$this->transport = $transport;
	}

	
	public function getPrix()
	{
		return $this->prix;
	}

	public function setPrix($prix){
		$this->prix = $prix;
	}

	
	
	public function getId() 
	{
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}



}


 