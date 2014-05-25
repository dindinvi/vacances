<?php

namespace djepo\LocationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class locationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateLocation','date')
            ->add('montantLoyer','text', 
                       array( 'max_length' => 2, 
                              'required' => true)
                    )
            ->add('typeLoyer')
            ->add('montantCharges','text', 
                       array( 'max_length' => 10, 
                              'required' => true))
             ->add('valide')
            ->add('logement')
            ->add('reglement')
            ->add('user')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\LocationBundle\Entity\location'
        ));
    }

    public function getName()
    {
        return 'djepo_locationbundle_locationtype';
    }
}
