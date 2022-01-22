<?php 
declare(strict_types=1);



/**
 * 
 */
abstract class Destination 
{
    private $id;
	private $titre;
	private $description;
	private $prix;
	


	public function getTitre(): string 
	{
		return $this->titre;
	}

	public function setTitre(string $titre){
		$this->titre = $titre;
	}

	
	public function getDescription(): string 
	{
		return $this->description;
	}

	public function setDescription(string $description){
		$this->description = $description;
	}

	
	public function getPrix(): int 
	{
		return $this->prix;
	}

	public function setPrix(int $prix){
		$this->prix = $prix;
	}

	
	
	public function getId(): int 
	{
		return $this->id;
	}

	public function setId(int $id){
		$this->id = $id;
	}



}


 ?>