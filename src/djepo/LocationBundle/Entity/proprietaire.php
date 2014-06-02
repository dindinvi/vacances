<?php

namespace djepo\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * proprietaire
 *
 * @ORM\Table(name="loca_proprietaire")
 * @ORM\Entity(repositoryClass="djepo\LocationBundle\Entity\proprietaireRepository")
 * @UniqueEntity(fields="user", message="Un proprietaire existe déjà.")
 */
class proprietaire
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
* @ORM\OneToOne(targetEntity="djepo\UserBundle\Entity\Personne", cascade={"Persist"})
* @ORM\JoinColumn(nullable=false)
* @Assert\Valid()
*/
private $personne;

    /**
     * @var string
     * @ORM\Column(name="typeProprietaire", type="string", length=50, nullable=true)
     */
    private $typeProprietaire;


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
     * Set typeProprietaire
     *
     * @param string $typeProprietaire
     * @return proprietaire
     */
    public function setTypeProprietaire($typeProprietaire)
    {
        $this->typeProprietaire = $typeProprietaire;

        return $this;
    }

    /**
     * Get typeProprietaire
     *
     * @return string 
     */
    public function getTypeProprietaire()
    {
        return $this->typeProprietaire;
    }

    /**
     * Set user
     *
     * @param \djepo\UserBundle\Entity\Personne $personne
     * @return proprietaire
     */
    public function setPersonne(\djepo\UserBundle\Entity\Personne $personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get user
     *
     * @return \djepo\UserBundle\Entity\Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
