<?php

// src/Controller/base.php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class base extends AbstractController
{
    /**
     * @route("/")
     */
    public function homepage()
    {
        return new Response("Hlavna stranka");
    }

    /**
     * @route("/table")
     */
    public function showTable()
    {
        $premenna = [1, 8, 4, 6, 2, 8, 16, 3, 15];
        

        return $this->render("base.html.twig",[
            "data" => $premenna,
        ]);
    }
    
}




?>