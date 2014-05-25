<?php

namespace djepo\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * location
 *
 * @ORM\Table(name="loca_location")
 * @ORM\Entity(repositoryClass="djepo\LocationBundle\Entity\locationRepository")
 */
class location
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
* @ORM\ManyToOne(targetEntity="djepo\LocationBundle\Entity\logement", cascade={"Persist"})
* @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
*/
    private $logement;
    
     //Le client peut disparaitre mais pas ses selections ou locations le contraire aussi est vrai
    
   /**
* @ORM\OneToOne(targetEntity="djepo\UserBundle\Entity\User", cascade={"Persist"})
* @ORM\JoinColumn(nullable=false)
* @Assert\Valid()
*/
private $user;

    /**
* @ORM\ManyToOne(targetEntity="djepo\UserBundle\Entity\reglement", cascade={"Persist"})
* @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
*/
    private $reglement;
    /**
     *
     * @ORM\OneToOne(targetEntity="djepo\UserBundle\Entity\facture", mappedBy="location", cascade={"Persist","Remove"})
     * @Assert\Valid()
     */
    protected $facture;
    /**
     * @var \DateTime
     *@Assert\Date()
     * @ORM\Column(name="dateLocation", type="date", nullable=false)
     */
    private $dateLocation;

     /**
     * @var \boolean
     *
     * @ORM\Column(name="valide", type="boolean", nullable=true)
     */
    private $valide;

    /**
     * @var integer
     *@Assert\Regex(pattern="/\d/", message="Votre montant  n'est pas valide.")
     * @ORM\Column(name="montantLoyer", type="integer", nullable=false)
     */
    private $montantLoyer;

    /**
     * @var string
     * @Assert\Regex(pattern="/\D/", message="Votre sélection n'est pas valide.")
     * @ORM\Column(name="typeLoyer", type="string", length=255, nullable=false)
     */
    private $typeLoyer;

    /**
     * @var integer
     *@Assert\Regex(pattern="/\d/", message="Votre montant  n'est pas valide.")
     * @ORM\Column(name="montantCharges", type="integer", nullable=false)
     */
    private $montantCharges;


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
     * Set dateLocation
     *
     * @param \DateTime $dateLocation
     * @return location
     */
    public function setDateLocation($dateLocation)
    {
        $this->dateLocation = $dateLocation;

        return $this;
    }

    /**
     * Get dateLocation
     *
     * @return \DateTime 
     */
    public function getDateLocation()
    {
        return $this->dateLocation;
    }


    /**
     * Set montantLoyer
     *
     * @param integer $montantLoyer
     * @return location
     */
    public function setMontantLoyer($montantLoyer)
    {
        $this->montantLoyer = $montantLoyer;

        return $this;
    }

    /**
     * Get montantLoyer
     *
     * @return integer 
     */
    public function getMontantLoyer()
    {
        return $this->montantLoyer;
    }

    /**
     * Set typeLoyer
     *
     * @param string $typeLoyer
     * @return location
     */
    public function setTypeLoyer($typeLoyer)
    {
        $this->typeLoyer = $typeLoyer;

        return $this;
    }

    /**
     * Get typeLoyer
     *
     * @return string 
     */
    public function getTypeLoyer()
    {
        return $this->typeLoyer;
    }

    /**
     * Set montantCharges
     *
     * @param integer $montantCharges
     * @return location
     */
    public function setMontantCharges($montantCharges)
    {
        $this->montantCharges = $montantCharges;

        return $this;
    }

    /**
     * Get montantCharges
     *
     * @return integer 
     */
    public function getMontantCharges()
    {
        return $this->montantCharges;
    }

   

    /**
     * Set logement
     *
     * @param \djepo\LocationBundle\Entity\logement $logement
     * @return location
     */
    public function setLogement(\djepo\LocationBundle\Entity\logement $logement)
    {
        $this->logement = $logement;

        return $this;
    }

    /**
     * Get logement
     *
     * @return \djepo\LocationBundle\Entity\logement 
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     * @return location
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean 
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set user
     *
     * @param \djepo\UserBundle\Entity\User $user
     * @return location
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
     * @return location
     */
    public function setReglement(\djepo\UserBundle\Entity\reglement $reglement)
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
     * Set facture
     *
     * @param \djepo\UserBundle\Entity\facture $facture
     * @return location
     */
    public function setFacture(\djepo\UserBundle\Entity\facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \djepo\UserBundle\Entity\facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
}
