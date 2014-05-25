<?php

namespace djepo\LocationBundle\Form;
namespace \djepo\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class evaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('logement', new logementType)
            ->add('user', new UserType)
            ->add('note','text', 
                       array( 'max_length' => 2,
                              'label' => 'note', 
                              'required' => true)
                    )
            ->add('commentaire', array('required' => false, 'label' => 'commentaire'))
            ->add('dateEvaluation','date')
            ->add('etatDuBien', array('required' => false))
            ->add('situation', array('required' => false))   
          
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'djepo\LocationBundle\Entity\evaluation'
        ));
    }

    public function getName()
    {
        return 'djepo_locationbundle_evaluationtype';
    }
}
