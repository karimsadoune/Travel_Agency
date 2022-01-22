<?php 

declare(strict_types=1);


class Reservation 
{
    private $id_res;
    private $id_pers;
    private $options;
    private $arrive;
    private $depart;
    private $date;
    private $nb_pers;
    private $prix;
    private $horaire;


    
    public function getHoraire(): string
    {
        return $this->horaire;
    }
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;
    }
    public function getId_pers(): int
    {
        return $this->id_pers;
    }
    public function setId_pers($id_pers)
    {
        $this->id_pers = $id_pers;
    }
    public function setOptions($options)
    {
        $this->options = $options;
    }
    public function getOptions(): string
    {
        return $this->options;
    }
    public function getNb(): int
    {
        return $this->nb_pers;
    }
    public function setNb($nb_pers)
    {
        $this->nb_pers = $nb_pers;
    }
    public function getArrive(): string
    {
        return $this->arrive;
    }

    public function setArrive(string $arrive)
    {
        $this->arrive = $arrive;
    }

    public function getDepart(): string
    {
        return $this->depart;
    }

    public function setDepart(string $depart)
    {
        $this->depart = $depart;
    }

    public function getId_res(): int
    {
        return $this->id_res;
    }

    public function setId_res(int $id_res)
    {
        $this->id_res = $id_res;
    }
    public function setDate(string $date)
    {
        $this->date = $date;
    }
    public function getDate(): string
    {
        return $this->date;
    }
    public function getPrix(): int
    {
        return $this->prix;    
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}

 ?>