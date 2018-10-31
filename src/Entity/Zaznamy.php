<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="zaznamy")
 */
class Zaznamy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum;

     /**
     * @ORM\Column(type="string")
     */
    private $partia;   

     /**
     * @ORM\Column(type="string")
     */
    private $cvik;   

     /**
     * @ORM\Column(type="integer")
     */
    private $vaha;   

     /**
     * @ORM\Column(type="integer")
     */
    private $prvaSeria; 

     /**
     * @ORM\Column(type="integer")
     */
    private $ciel; 

     /**
     * @ORM\Column(type="integer")
     */
    private $realizovane;

     /**
     * @ORM\Column(type="string")
     */
    private $poznamky; 


    // Getters and setters
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDatum(): ?\DateTime
    {
        return $this->datum;
    }

    public function setDatum()
    {
        // WILL be saved in the database
        $this->datum = new \DateTime("now");
    }

    /**
     * Get repartiaf
     *
     * @return string
     */
    public function getPartia(): string {
        return $this->partia;
    }

    public function setPartia(string $partia): self {
        // return $this->$partia;
        $this->partia = $partia;
        return $this;
    }   


    public function getCvik(){
        return $this->cvik;
    }
    public function setCvik(string $cvik): self {
        $this->cvik = $cvik;
        return $this;
    } 


    public function getVaha(){
        return $this->vaha;
    }
    public function setVaha($vaha){
        $this->vaha = $vaha;
        return $this;
    } 


    public function getPrvaSeria(){
        return $this->prvaSeria;
    }
    public function setPrvaSeria($prvaSeria){
        $this->prvaSeria = $prvaSeria;
        return $this;
    } 


    public function getCiel(){
        return $this->ciel;
    }
    public function setCiel($ciel){
        $this->ciel = $ciel;
        return $this;
    } 


    public function getRealizovane(){
        return $this->realizovane;
    }
    public function setRealizovane($realizovane){
        $this->realizovane = $realizovane;
        return $this;
    } 


    public function getPoznamky(){
        return $this->poznamky;
    }
    public function setPoznamky($poznamky){
        $this->poznamky = $poznamky;
        return $this;
    } 
}
