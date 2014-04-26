<?php

namespace djepo\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * djepo\UserBundle\Entity\Admin
 *
 * @ORM\Table(name="loca_Admin")
 * @ORM\Entity(repositoryClass="djepo\UserBundle\Entity\AdminRepository")
 */
class Admin
{

	/**
	* @var integer $id
	*
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	
	/**
	 * @var string $email
	 *
	 */
	/**
	 * Get id
	 *
	 * @return integer
	 */
	
	public function getId()
	{
		return $this->id;
	}
	
	private $newMail;
	
	
	public function setNewMail($newMail)
	{
		$this->newMail = $newMail;
	}
	
	public function getNewMail()
	{
		return $this->newMail;
	}
   
}