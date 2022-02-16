<?php

namespace App\Form;

use App\Entity\TacheSemaine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TacheSemaineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('domaineTache', EntityType::class, array('class' => 'App\Entity\DomaineTache','choice_label' => 'libelle'))
            //->add('domaineTache')
            ->add('jour', EntityType::class, array('class' => 'App\Entity\Jour','choice_label' => 'nom'))
            //->add('semaineStage')
            ->add('ajouter', SubmitType::class, array('label' => 'Ajouter Tache'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TacheSemaine::class,
        ]);
    }
}
