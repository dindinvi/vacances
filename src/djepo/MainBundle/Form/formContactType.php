<?php

namespace djepo\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class formContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject','text', array( 'required' => false))
            ->add('nom','text', array( 'required' => false,'label' => 'Nom'))
            ->add('prenom','text', array('required' => false,'label' => 'Nom'))
            ->add('email', 'email', array('trim' => true, 'required' => true))
            ->add('message','textarea', array('attr' => array('rows' => '10','cols' => '30')) )
        ;
    }
  
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\MainBundle\Entity\formContact'
        ));
    }

    public function getName()
    {
        return 'djepo_mainbundle_formcontacttype';
    }
}
