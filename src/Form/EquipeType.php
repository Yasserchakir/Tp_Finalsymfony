<?php

namespace App\Form;

use App\Entity\Equipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Localisation')
            ->add('Stade_domiciel')
            ->add('Entraineur')
            ->add('Capitaine')
            ->add('Formation')
            ->add('Style_jeu')
            ->add('Taille_equipe')
            ->add('Lique')
            ->add('Budget')
            ->add('Realisations')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}
