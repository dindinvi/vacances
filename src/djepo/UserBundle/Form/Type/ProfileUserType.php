<?php

namespace djepo\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
//use Symfony\Component\Form\FormBuilder; 
use Symfony\Component\Form\FormBuilderInterface;
 use djepo\UserBundle\Form\AdresseType;
 
class ProfileUserType extends BaseType
{
   protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildUserForm($builder, $options);

        // add your custom field
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

    
}
