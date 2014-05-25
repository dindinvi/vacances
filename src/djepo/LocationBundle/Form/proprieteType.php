<?php

namespace djepo\LocationBundle\Form;
namespace \djepo\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class proprieteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proprietaire', new proprietaireType())
            ->add('adresse', new AdresseType())
            ->add('dateAcquisition','date')
            ->add('description','text', array( 'required' => true,'label' => 'description: '))
            ->add('nomPropriete','text', array( 'required' => false,'label' => 'Titre: '))
           
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\LocationBundle\Entity\propriete'
        ));
    }

    public function getName()
    {
        return 'djepo_locationbundle_proprietetype';
    }
}
