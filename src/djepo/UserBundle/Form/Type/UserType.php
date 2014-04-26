<?php

namespace djepo\UserBundle\Form\Type;

use djepo\UserBundle\Form\AdresseType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Ajoutez vos champs ici, revoil� notre champ *location* :
		$builder
                     ->add('firstname','text', array( 'required' => false,'label' => 'Prenom: '))
                     ->add('lastname','text', array( 'required' => false,'label' => 'Nom'))
                     ->add('email', 'repeated', array(// add venant de RegistrationFormType
				'type' => 'text',
				'invalid_message' => 'Email different .',))
			
		->add('typeEntite', 'choice', array(
            		'choices'   => array('Particulier' => 'Particulier', 'Société' => 'Société'),
            		'required'  => false, 
            		'label' => 'type d\'entite',)
            	)
            ->add('telFixe','text', array( 'required' => false,'label' => 'Tel. Fixe '))
            ->add('telPortable','text', array('required' => false, 'label' => 'Tel. Portable '))
            ->add('fax','text', array( 'required' => false,'label' => 'Fax '))		
	    ->add('adresse', new AdresseType)
            ;
    }
/*
    public function getName()
    {
        return 'djepo_user_registration';
    }
    


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\UserBundle\Entity\User'
        ));
    }
*/
  
}
