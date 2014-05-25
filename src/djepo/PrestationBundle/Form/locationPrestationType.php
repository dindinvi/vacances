<?php

namespace djepo\PrestationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

namespace djepo\LocationBundle\Form;

class locationPrestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDepartPrestation')
            ->add('dateFinPrestation')
            ->add('montant')
            ->add('commentaire')
            ->add('location', new locationType)
            ->add('prestation', new prestationType)
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\PrestationBundle\Entity\locationPrestation'
        ));
    }

    public function getName()
    {
        return 'djepo_Prestationbundle_locationprestationtype';
    }
}
