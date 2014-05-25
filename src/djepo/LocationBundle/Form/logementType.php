<?php

namespace djepo\LocationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class logementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('propriete', new proprieteType)
            ->add('libelle','text', array('required' => true, 'label' => 'titre '))
            ->add('nombrePiece','text', 
                       array( 'max_length' => 2,
                              'label' => 'Nombre de pieces', 
                              'required' => true)
                    )
            ->add('typeImmeuble', new typeImmeubleType(), array(
                            'empty_value' => 'Choisir...',
                            'required'  => true,
                          'label' => 'type de bien', )
                    )
            ->add('surface','text', 
                       array( 'max_length' => 2,
                              'label' => 'Nombre de pieces', 
                              'required' => true)
                    )
             ->add('sejour','text', 
                       array( 'max_length' => 1,
                              'label' => 'Nombre de dejou', 
                              'required' => false)
                    )
            ->add('transport','text', array('required' => false, 'label' => 'transport '))
           
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\LocationBundle\Entity\logement'
        ));
    }

    public function getName()
    {
        return 'djepo_locationbundle_logementtype';
    }
}
