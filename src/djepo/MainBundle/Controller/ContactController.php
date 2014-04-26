<?php

namespace djepo\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use djepo\MainBundle\Entity\formContact;
use djepo\MainBundle\Form\formContactType;
use djepo\MainBundle\Form\formContactHandler;
use djepo\MainBundle\Entity\MotsCle;


class ContactController extends Controller
{
  // private $formContact;
	 
   
    public function indexAction()
    {
    	
    	$formContact = new formContact();
    	$form = $this->createform(new formContactType,$formContact);
    	$formHandler = new formContactHandler(
    			$form, $this->get('request'), 
    			$this->getDoctrine()->getManager(),
    			$this->get('mailer')
    			);
    	
    	 // On ex�cute le traitement du formulaire. S'il retourne true, alors le formulaire a bien �t� trait�
        if( $formHandler->process()){
        	
		       $message = \Swift_Message::newInstance()
				->setSubject('Contact enquiry from symblog')
				->setFrom($this->container->getParameter('mailer_user'))
                               ->setTo($this->container->getParameter('mailer_user_sender'));
                                 //->setFrom('kwaouvi.g@gmail.com') 
				//->setTo('dindinvi@yahoo.fr');
		        $message->setBody($this->renderView('djepoMainBundle:Contact:contactMail.txt.twig',
						 array('enquiry' => $formContact)));
				
			 $this->get('mailer')->send($message);
                         
		
        	return $this->redirect($this->generateUrl('djepoMain_contact'));
        }
         $motscle = $this->getDoctrine()->getEntityManager()
    	->getRepository('djepoMainBundle:MotsCle')
    	->find(5);//ABOUT QUI NOUS SOMME
       return $this->render('djepoMainBundle:Contact:index.html.twig',
        		 array('form' => $form->createView(),
        		 		'motscle' => $motscle ));
    }
    
   
}
