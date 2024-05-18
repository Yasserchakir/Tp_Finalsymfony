<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Joueur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Age')
            ->add('Date_naissance', null, [
                'widget' => 'single_text'
            ])
            ->add('Nationalite')
            ->add('Position')
            ->add('Numero_maillot')
            ->add('Pied')
            ->add('Statut_contrat')
            ->add('Niveau_competence')
            ->add('relationavecEquipe', EntityType::class, [
                'class' => Equipe::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}
