<?php

// src/Controller/base.php
namespace App\Controller;

use App\Entity\Zaznamy;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class base extends AbstractController
{
    /**
     * @route("/", name="homePage")
     * 
     */
    public function homepage()
    {
        $zaznam = $this->getDoctrine()->getRepository(Zaznamy::class)->findAll();
        
        return $this->render("base.html.twig",["data" => $zaznam,]);
    }

    /**
     * @route("/zaznam/new", name="form")
     * 
     */
    public function addForm()
    {
        return new Response("Formular");
    }
    

    /**
     * @route("/save")
     */
    public function saveValues()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $zaznam = new Zaznamy();
        $zaznam->setDatum();
        $zaznam->setPartia("Nohy");
        $zaznam->setCvik("Drep");
        $zaznam->setVaha("65");
        $zaznam->setPrvaSeria("12");
        $zaznam->setCiel("50");
        $zaznam->setRealizovane("50");
        $zaznam->setPoznamky("Poznamka");
        
        $entityManager->persist($zaznam);
        $entityManager->flush();

        // return new response ("Zaznam uspesne ulozeny do databazy". $zaznam->getId());
        return $this->redirectToRoute('homePage');

    }
    
}




?>