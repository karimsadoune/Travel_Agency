<?php 

declare(strict_types=1);


class Personne 
{
	private $nom;
    private $prenom;
	private $id;
	private $email;
	private $tele;
    private $mdp;

	public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getTele(): int
    {
        return $this->tele;
    }

    public function setTele(int $tele)
    {
        $this->tele = $tele;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPassword(): string
    {
        return $this->mdp;
    }
    public function setPassword(string $mdp)
    {
        $this->mdp = $mdp;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

}

 ?>