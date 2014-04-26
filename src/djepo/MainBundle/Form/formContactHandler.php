<?php
namespace djepo\MainBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use djepo\MainBundle\Entity\formContact;

class formContactHandler
{
	protected $form;
	protected $request;
	protected $em;
	protected $flash;
	protected $mailer;
	
	
	public function __construct(Form $form, Request $request, EntityManager $em ,  \Swift_Mailer $mailer )
	{
		$this->form    = $form;
		$this->request = $request;
		$this->em      = $em;
		$this->flash = $request->getSession();
		$this->mailer = $mailer;
		
	}

	public function process()
	{
		if( $this->request->getMethod() == 'POST' )
		{
			$this->form->bindRequest($this->request);

			if( $this->form->isValid() )	{
				     $this->onSuccess($this->form->getData());
				     return true;
		   }
			else {
				$this->flash->setFlash('blogger-notice', 'ECHEC DE VOTRE CONNEXION');
				return false	;	
			}	
		}

		return false;
	}

	
	public function onSuccess(formContact $formContact)
	{
		$this->flash->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');
		$this->em->persist($formContact);
		$this->em->flush();
	}
}
