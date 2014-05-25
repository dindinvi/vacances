<?php

namespace djepo\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * logement
 *
 * @ORM\Table(name="loca_logement")
 * @ORM\Entity(repositoryClass="djepo\LocationBundle\Entity\logementRepository")
 */
class logement
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
* @ORM\ManyToOne(targetEntity="djepo\LocationBundle\Entity\propriete", cascade={"Persist"})
* @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
*/
private $propriete;
    /**
     * @var string
     * 
     * @Assert\NotBlank(message="Veuillez entrer un titre")
     * @Assert\MinLength(limit=10, message="Veuillez entrer un titre de plus de {{ limit  }} caracteres")
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *  @Assert\Min(1) 
     * @ORM\Column(name="nombrePiece", type="integer", nullable=false)
     */
    private $nombrePiece;

    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez choisir un type")
     * @ORM\Column(name="typeImmeuble", type="string", length=255, nullable=false)
     */
    private $typeImmeuble;

    /**
     * @var integer
     * @Assert\NotBlank(message="Veuillez entrer une surface")
     * @ORM\Column(name="surface", type="integer", nullable=false)
     */
    private $surface;

    /**
     * @var integer
     * @Assert\NotBlank(message="Veuillez entrer le nombre de sejour")
     * @ORM\Column(name="sejour", type="integer", nullable=true)
     */
    private $sejour;
    /**
     * @var integer
     * @Assert\NotBlank(message="Veuillez entrer le nombre de salle de bain")
     * @ORM\Column(name="sdd", type="integer", nullable=true)
     */
    private $sbb;
    
    /**
     * @var integer
     * @Assert\NotBlank(message="Veuillez entrer le nombre de chambre")
     * @ORM\Column(name="chambre", type="integer", nullable=true)
     */
    private $chambre;
    
    /**
     * @var integer
     * @Assert\NotBlank(message="Veuillez entrer le nombre de cuisine")
     * @ORM\Column(name="cuisine", type="integer", nullable=true)
     */
    private $cuisine;
    
    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=255, nullable=true)
     */
    private $transport;


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
     * Set libelle
     *
     * @param string $libelle
     * @return loca_logement
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
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

    /**
     * Set nombrePiece
     *
     * @param integer $nombrePiece
     * @return loca_logement
     */
    public function setNombrePiece($nombrePiece)
    {
        $this->nombrePiece = $nombrePiece;

        return $this;
    }

    /**
     * Get nombrePiece
     *
     * @return integer 
     */
    public function getNombrePiece()
    {
        return $this->nombrePiece;
    }

    /**
     * Set typeImmeuble
     *
     * @param string $typeImmeuble
     * @return loca_logement
     */
    public function setTypeImmeuble($typeImmeuble)
    {
        $this->typeImmeuble = $typeImmeuble;

        return $this;
    }

    /**
     * Get typeImmeuble
     *
     * @return string 
     */
    public function getTypeImmeuble()
    {
        return $this->typeImmeuble;
    }

    /**
     * Set surface
     *
     * @param integer $surface
     * @return loca_logement
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return integer 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set transport
     *
     * @param string $transport
     * @return loca_logement
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return string 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set propriete
     *
     * @param \djepo\LocationBundle\Entity\propriete $propriete
     * @return logement
     */
    public function setPropriete(\djepo\LocationBundle\Entity\propriete $propriete)
    {
        $this->propriete = $propriete;

        return $this;
    }

    /**
     * Get propriete
     *
     * @return \djepo\LocationBundle\Entity\propriete 
     */
    public function getPropriete()
    {
        return $this->propriete;
    }

    /**
     * Set sejour
     *
     * @param integer $sejour
     * @return logement
     */
    public function setSejour($sejour)
    {
        $this->sejour = $sejour;

        return $this;
    }

    /**
     * Get sejour
     *
     * @return integer 
     */
    public function getSejour()
    {
        return $this->sejour;
    }

    /**
     * Set sbb
     *
     * @param integer $sbb
     * @return logement
     */
    public function setSbb($sbb)
    {
        $this->sbb = $sbb;

        return $this;
    }

    /**
     * Get sbb
     *
     * @return integer 
     */
    public function getSbb()
    {
        return $this->sbb;
    }

    /**
     * Set chambre
     *
     * @param integer $chambre
     * @return logement
     */
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return integer 
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set cuisine
     *
     * @param integer $cuisine
     * @return logement
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;

        return $this;
    }

    /**
     * Get cuisine
     *
     * @return integer 
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }
}
