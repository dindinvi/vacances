<?php

namespace djepo\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * djepo\UserBundle\Entity\Ville
 *
 * @ORM\Table(name="loca_ville")
 * @ORM\Entity(repositoryClass="djepo\UserBundle\Entity\VilleRepository")
 */
class Ville
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
     * @var string $nomVille
     *
     * @ORM\Column(name="nomVille", type="string", length=255)
     * @Assert\NotBlank(message="Entrez votre ville")
     */
    private $nomVille;

   
    /**
     * @var string $libelle POUR pays
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     * @Assert\NotBlank(message="Entrez votre pays")
     */
    private $libelle;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomVille
     *
     * @param string $nomVille
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;
    }

    /**
     * Get nomVille
     *
     * @return string 
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }

       
    /**
     * Set libelle
     *
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
    	$this->libelle = $libelle;
    }
    
    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
    	return $this->libelle;
    }
   
}