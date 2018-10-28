<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ZaznamyRepository")
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

    public function getDatum(){
        return $this->datum;
    }
    public function setDatum($datum){
        return $this->$datum;
    }

    public function getPartia(){
        return $this->partia;
    }
    public function setPartia($partia){
        return $this->$partia;
    }   


    public function getCvik(){
        return $this->cvik;
    }
    public function setCvik($cvik){
        return $this->$cvik;
    } 


    public function getVaha(){
        return $this->vaha;
    }
    public function setVaha($vaha){
        return $this->$vaha;
    } 


    public function getPrvaSeria(){
        return $this->prvaSeria;
    }
    public function setPrvaSeria($prvaSeria){
        return $this->$prvaSeria;
    } 


    public function getCiel(){
        return $this->ciel;
    }
    public function setCiel($ciel){
        return $this->$ciel;
    } 


    public function getRealizovane(){
        return $this->realizovane;
    }
    public function setRealizovane($realizovane){
        return $this->$realizovane;
    } 


    public function getPoznamky(){
        return $this->poznamky;
    }
    public function setPoznamky($poznamky){
        return $this->$poznamky;
    } 
}
