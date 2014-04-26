<?php
namespace djepo\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use djepo\UserBundle\Entity\Adresse;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="loca_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     *  @ORM\ManyToOne(targetEntity="djepo\UserBundle\Entity\Adresse", cascade={"Persist","Remove"})
     *  @ORM\JoinColumn(nullable=true)
     *  @Assert\Valid()
     */
    private $adresse;
    
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $firstname;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lastname;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $facebookId;

    /**
     * @var datetime $dateN
     *
     * @ORM\Column(name="dateN", type="date", nullable=true)
     * @Assert\DateTime()
     */
    private  $dateN;

    /**
     * @var string $typeEntite
     *
     * @ORM\Column(name="typeEntite", type="string", length=12, nullable=true)
     * @Assert\NotBlank(message="Veuillez selectionner une option ")
     */
    private $typeEntite;

    /**
     * @var string $telFixe
     * @ORM\Column(name="telFixe", type="string", length=255, nullable=true)
     *  @Assert\Regex(pattern="/\d/", message="Votre t�l�phone fixe n'est pas valide.")
     */
    private $telFixe;

    /**
     * @var string $telPortable
     * @ORM\Column(name="telPortable", type="string", length=255, nullable=true)     
     * @Assert\Regex(pattern="/\d/", message="Votre t�l�phone portable n'est pas valide.")
     */
    private $telPortable;
    
     
    /**
     * @var string $fax     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     * @Assert\Regex(pattern="/\d/", message="Votre fax n'est pas valide.")
     */
    private $fax;

    public function __construct()
    {
        parent::__construct();
        // your own logic        
    }
    
    public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }
    
    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname=null)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname=null)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstName() . ' ' . $this->getLastname();
    }

    /**
     * @param string $facebookID
     * @return void
     */
    public function setFacebookID($facebookID=null)
    {
        $this->facebookId = $facebookID;        
        if ($this->username=="")    //si on n'a pas de username
        {
            //on met le facebook id a la place
            $this->setUsername($facebookID);
        }        
    }

    /**
     * @return string
     */
    public function getFacebookID()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {        
        if (isset($fbdata['id'])) {
            $this->setFacebookID($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
    }
    

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
     * Set dateN
     *
     * @param \DateTime $dateN
     * @return User
     */
    public function setDateN($dateN)
    {
        $this->dateN = $dateN;

        return $this;
    }

    /**
     * Get dateN
     *
     * @return \DateTime 
     */
    public function getDateN()
    {
        return $this->dateN;
    }

    /**
     * Set typeEntite
     *
     * @param string $typeEntite
     * @return User
     */
    public function setTypeEntite($typeEntite)
    {
        $this->typeEntite = $typeEntite;

        return $this;
    }

    /**
     * Get typeEntite
     *
     * @return string 
     */
    public function getTypeEntite()
    {
        return $this->typeEntite;
    }

    /**
     * Set telFixe
     *
     * @param string $telFixe
     * @return User
     */
    public function setTelFixe($telFixe)
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    /**
     * Get telFixe
     *
     * @return string 
     */
    public function getTelFixe()
    {
        return $this->telFixe;
    }

    /**
     * Set telPortable
     *
     * @param string $telPortable
     * @return User
     */
    public function setTelPortable($telPortable)
    {
        $this->telPortable = $telPortable;

        return $this;
    }

    /**
     * Get telPortable
     *
     * @return string 
     */
    public function getTelPortable()
    {
        return $this->telPortable;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return User
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    //GESTIONS ADRSSE
    public function setAdresse(\djepo\UserBundle\Entity\Adresse $adresse)
    {
    	$this->adresse = $adresse;
    }
    /**
     * Get fax
     *
     * @return string
     */
    public function getAdresse()
    {
    	return $this->adresse;
    }
    
}
