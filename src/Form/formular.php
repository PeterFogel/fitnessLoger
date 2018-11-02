<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class formular extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Datum', DateType::class, ["widget" => "single_text", "format" => "dd-MM-yyyy"])
            ->add('Partia', TextType ::class)
            ->add('Cvik', TextType::class)
            ->add('Vaha', NumberType::class)
            ->add('Prva_seria', NumberType::class)
            ->add('Ciel', NumberType::class)
            ->add('Realizovane', NumberType::class)
            ->add('Poznamka', TextType::class);
    }
}

?>