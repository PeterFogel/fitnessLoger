<?php

// src/Controller/base.php
namespace App\Controller;

use App\Entity\Zaznamy;
use App\Form\formular;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class base extends AbstractController
{
    /**
     * @route("/", name="homePage")
     * 
     */
    public function homepage()
    {
        $zaznamy = $this->getDoctrine()->getRepository(Zaznamy::class)->findAll();
        
        return $this->render("base.html.twig",["data" => $zaznamy,]);
    }


    
    /**
     * @route("/zaznam/show/{id}", name="zaznamShow")
     * 
     */
    public function zaznamShow($id)
    {
        $zaznam = $this-> getDoctrine() -> getRepository(Zaznamy::class)->find($id);

        return $this->render("sites/inc/form.html.twig",["data" => $zaznam]);
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

     /**
     * @route("/zaznam/new", name="newEntry")
     * Method({"GET", "POST"})
     */
    public function addForm(EntityManagerInterface $em)
    {
        $form = $this->createForm(formular::class);

        return $this->render('sites/inc/form.html.twig', [
            'articleForm' => $form->createView()
        ]);
    }

}




?>