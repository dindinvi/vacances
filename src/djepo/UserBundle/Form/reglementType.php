<?php

namespace djepo\UserBundle\Form;

use djepo\LocationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class loyerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datePerception')
            ->add('montantPercu')
            ->add('montantVerse')
            ->add('dateVersement')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\UserBundle\Entity\reglement'
        ));
    }

    public function getName()
    {
        return 'djepo_Userbundle_reglementtype';
    }
}
