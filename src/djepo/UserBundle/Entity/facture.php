<?php

namespace djepo\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * facture
 *
 * @ORM\Table(name="loca_facture")
 * @ORM\Entity(repositoryClass="djepo\UserBundle\Entity\factureRepository")
 */
class facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
   //Le client peut disparaitre mais pas ses reglements ou locations le contraire aussi est vrai
   /**
* @ORM\OneToOne(targetEntity="djepo\UserBundle\Entity\User", cascade={"Persist"})
* @ORM\JoinColumn(nullable=false)
* @Assert\Valid()
*/
private $user;
/**
     *
     * @ORM\OneToOne(targetEntity="djepo\UserBundle\Entity\reglement", inversedBy="facture", cascade={"Persist","Remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid()
     */
    protected $reglement;

    /**
     *
     * @ORM\OneToOne(targetEntity="djepo\LocationBundle\Entity\location", inversedBy="facture", cascade={"Persist","Remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    protected $location;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     * @Assert\Date()
     * @ORM\Column(name="dateEmission", type="date", nullable=false)
     */
    private $dateEmission;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="typePrestation", type="string", length=255, nullable=false)
     */
    private $typePrestation;


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
     * Set titre
     *
     * @param string $titre
     * @return facture
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateEmission
     *
     * @param \DateTime $dateEmission
     * @return facture
     */
    public function setDateEmission($dateEmission)
    {
        $this->dateEmission = $dateEmission;

        return $this;
    }

    /**
     * Get dateEmission
     *
     * @return \DateTime 
     */
    public function getDateEmission()
    {
        return $this->dateEmission;
    }

    /**
     * Set typePrestation
     *
     * @param string $typePrestation
     * @return facture
     */
    public function setTypePrestation($typePrestation)
    {
        $this->typePrestation = $typePrestation;

        return $this;
    }

    /**
     * Get typePrestation
     *
     * @return string 
     */
    public function getTypePrestation()
    {
        return $this->typePrestation;
    }

    /**
     * Set user
     *
     * @param \djepo\UserBundle\Entity\User $user
     * @return facture
     */
    public function setUser(\djepo\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \djepo\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set reglement
     *
     * @param \djepo\UserBundle\Entity\reglement $reglement
     * @return facture
     */
    public function setReglement(\djepo\UserBundle\Entity\reglement $reglement = null)
    {
        $this->reglement = $reglement;

        return $this;
    }

    /**
     * Get reglement
     *
     * @return \djepo\UserBundle\Entity\reglement 
     */
    public function getReglement()
    {
        return $this->reglement;
    }

    /**
     * Set location
     *
     * @param \djepo\LocationBundle\Entity\location $location
     * @return facture
     */
    public function setLocation(\djepo\LocationBundle\Entity\location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \djepo\LocationBundle\Entity\location 
     */
    public function getLocation()
    {
        return $this->location;
    }
}
